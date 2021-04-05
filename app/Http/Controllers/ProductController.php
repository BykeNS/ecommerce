<?php

namespace App\Http\Controllers;

use App\Category;
use App\Mail\CustomerMail;
use App\Mail\NewMail;
use App\Product;
use App\User;
use Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Stripe\Charge;
use Stripe\Customer;
use Stripe\Stripe;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
       $categories = Category::all();
     
       view()->share('categories', $categories);
      
    }
    public function index()
    {
    
        $products = Product::allProduct();
        //$products = Product::with('category')->paginate(12);
        //$products = DB::table('products')->paginate(12);
        return view('frontend.pages.index', compact('products'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $products = Product::findOrfail($product);
        $interested = Product::where('id', '!=', $product->id)->get()->random(8);

        return view('frontend.pages.show', compact('products', 'interested'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */

     public function about()
     {
        return view('frontend.pages.about');
     }

     public function contact()
     {
        return view('frontend.pages.contact');
    }
     
    public function search(Request $request)
    {
        $query = request()->input('q');
        $products = Product::where('name', 'LIKE', "%" . $query . "%")
                            ->orWhere('name', 'like', $query . "%")
                            ->get();

        return view('frontend.pages.search', compact('products', 'query'));

    }
    public function catFind($product)
    {
        $products = Product::whereHas('category', function ($query) use($product) {
                        $query->where('category_id', $product);
                        })->orderBy('id','DESC')->get();  

        $category_name = Category::findOrFail($product);

        return view('frontend.pages.category', compact('products', 'category_name'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */

    public function add(Request $request)
    {
        
        Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'weight' => 13,
            'qty' => $request->qty,
            'options' => ['image' => $request->image],
        ]);

        return redirect()->back()->with('success', $request->name . ' is saved');
    }

    public function update(Request $request, $rowId)
    {
        Cart::setDiscount($rowId,10);
        
        Cart::update($rowId, $request->qty);
        return redirect()->back()->with('success', 'Item ' . $request->name . ' was updated to your cart!');
    }

    public function remove($rowid)
    {
        Cart::remove($rowid);
        return redirect()->back()->with('success', 'Item  was removed from your cart!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        Cart::destroy();
        return redirect()->back()->with('success', 'Your cart is now empty');
    }

    public function cart()
    {
        return view('frontend.pages.cart');
    }
// Stripe  integration
    public function charge(Request $request)
    {
        $total = floatval(str_replace(',', '', Cart::total()) * 100);
        $cart = Cart::content();
        try {

            Stripe::setApiKey('sk_test_Xx2aX0lIiAaminiRrHNNdJ9I');

            $customer = Customer::create(array(
                'email' => $request->email,
                'name' => $request->name,
                'phone' => $request->phone,
                'source' => $request->stripeToken,
            ));

            $charge = Charge::create(array(
                'description' => 'Transaction',
                'customer' => $customer->id,
                'amount' => $total,
                'currency' => 'eur',
                'receipt_email' => $request->email,
                 
            ));
            
            Cart::destroy();
             

           Mail::to($customer['email'])->send(new CustomerMail($cart));
           Mail::to(env('MAIL_USERNAME'))->send(new Newmail);

            return redirect('/thanks')->with('success', 'Thank You! Your payment was successful');

        } catch (\Exception $ex) {
            return $ex->getMessage();
        }

    }

    public function thanks()
    {
        return view('frontend.pages.thanks');
    }
}
