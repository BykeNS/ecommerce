<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Image;
use Symfony\Component\HttpKernel\HttpCache\Store;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $users = User::all();
        $categories = Category::all();
        $products = Product::allProduct();

        return view('admin.pages.index', compact('products', 'users', 'categories'));

    }

    public function create()
    {
        $categories = Category::all();

        return view('admin.pages.create', compact('categories'));
    }

    public function show(Product $product)
    {
        $products = Product::findOrfail($product);

        return view('admin.pages.show', compact('products'));
    }

    public function store(Request $request, Product $product)
    {

        $this->validate($request, [
            'name' => 'required|unique:products|max:255',
            'description' => 'required|min:10 |max:5000',
            'price' => 'required',
            'slug' => '',
            'image' => 'required|max:4024', // 4 MB,
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4024',

        ]);

        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->slug = Str::slug($request->name);

        $names = [];
        if ($request->hasFile('image')) {

            foreach ($request->file('image') as $image) {

                $filename = time() . '.' . $image->getClientOriginalName();
                Image::make($image)->resize(400, 450)->save(public_path('images/' . $filename));
                $names[] = $filename;

            }
        }
        $product->image = implode(',', $names);
        $product->save();
        $product->category()->attach($request->category);

        return redirect('/admin/dashboard')->with('success', $product->name . ' is submited');
    }

    public function edit(Product $product)
    {
        $products = Product::findOrfail($product);
        $categories = Category::all();
        return view('admin.pages.edit', compact('products', 'categories'));

    }
    public function update(Request $request, Product $product)
    {

        $this->validate($request, [
            'name' => 'required|max:255',
            'description' => 'required|min:10 |max:5000',
            'price' => 'required',
            'slug' => '',
            'image' => 'nullable',
            'image.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:3548', // 3 MB,

        ]);
        //$products = Product::findOrfail($product);

        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->slug = Str::slug($request->name);

        $names = [];
        if ($request->hasFile('image')) {

            foreach (explode(',', $product->image) as $image) {
                $productImage = public_path('images/' . $image);
                if ($productImage) {

                    unlink($productImage);

                }
            }
            foreach ($request->file('image') as $image) {

                $filename = time() . '.' . $image->getClientOriginalName();
                Image::make($image)->resize(400, 450)->save(public_path('images/' . $filename));
                $names[] = $filename;

            }
            $product->image = implode(',', $names);
        }

        $product->category()->sync($request->category);
        $product->update();

        return redirect('/admin/dashboard')->with('success', ' Product ' . $product->name . ' updated');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->back()->with('success', ' Product ' . $product->name . ' has been deleted!!!');
    }

    public function user()
    {
        $users = User::all();
        return view('admin.users.user',compact('users'));
    }

}
