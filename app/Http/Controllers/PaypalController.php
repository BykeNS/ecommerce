<?php

namespace App\Http\Controllers;

use Str;
use URL;
use Auth;
use Config;
use Session;
use Redirect;
//use App\Order;
//use App\Invoice;
//use App\Suborder;
use PayPal\Api\Item;
use PayPal\Api\Payer;
use PayPal\Api\Amount;
use PayPal\Api\Payment;
use PayPal\Api\ItemList;
use PayPal\Api\WebProfile;
use PayPal\Api\InputFields;
use PayPal\Api\Transaction;
use PayPal\Rest\ApiContext;
use Illuminate\Http\Request;
use PayPal\Api\RedirectUrls;
use PayPal\Api\PaymentExecution;
use Illuminate\Support\Facades\Input;
use PayPal\Auth\OAuthTokenCredential;
use Gloudemans\Shoppingcart\Facades\Cart;

class PaypalController extends Controller
{
    private $apiContext;

    public function __construct()
    {
        # Main configuration in constructor
        $paypalConfig = Config::get('paypal');

        $this->apiContext = new ApiContext(new OAuthTokenCredential(
                'AQuhaFCcEvtrblCG6kMsEbDHtX1WTROHpmp4fcJRaIFiPaIT-NG_JLtf9wRAw5FWYzOulFa2BZDc4lRu',
                'EBPffLIfby3JB1qZorBITvCWAbsby24hoH2bDKG0q0fxl6CH5SEn7x24Xk8QHm5P4lrrIMvsi9iS7gbX')
        );

        $this->apiContext->setConfig($paypalConfig['settings']);
    }

    public function payment(){
        echo 'Payment succsessfull';
    }

   public function create(Request $request)
   {
    
    $payer = new Payer();
    $payer->setPaymentMethod('paypal');

    # We insert a new order in the order table with the 'initialised' status
    // $order = new Order();
    // $order->user_id = Auth::user()->id;
    // $order->invoice_id = null;
    // $order->status = 'initialised';
    // $order->save();

    # We need to update the order if the payment is complete, so we save it to the session
    //Session::put('orderId', $order->getKey());

    # We get all the items from the cart and parse the array into the Item object
    $items = [];

    foreach (Cart::content() as $item) {
        $items[] = (new Item())
            ->setName($item->name)
            ->setCurrency('USD')
            ->setQuantity($item->qty)
            ->setPrice($item->price);
    }

    # We create a new item list and assign the items to it
    $itemList = new ItemList();
    $itemList->setItems($items);

    # Disable all irrelevant PayPal aspects in payment
    $inputFields = new InputFields();
    $inputFields->setAllowNote(true)
        ->setNoShipping(1)
        ->setAddressOverride(0);

    $webProfile = new WebProfile();
    $webProfile->setName(uniqid())
        ->setInputFields($inputFields)
        ->setTemporary(true);

    $createProfile = $webProfile->create($this->apiContext);

    # We get the total price of the cart
    $amount = new Amount();
    $amount->setCurrency('USD')
        ->setTotal(Cart::subtotal());

    $transaction = new Transaction();
    $transaction->setAmount($amount);
    $transaction->setItemList($itemList)
        ->setDescription('Your transaction description');

    $redirectURLs = new RedirectUrls();
    $redirectURLs->setReturnUrl(URL::to('status'))
        ->setCancelUrl(URL::to('status'));

    $payment = new Payment();
    $payment->setIntent('Sale')
        ->setPayer($payer)
        ->setRedirectUrls($redirectURLs)
        ->setTransactions(array($transaction));
    $payment->setExperienceProfileId($createProfile->getId());
    $payment->create($this->apiContext);

    foreach ($payment->getLinks() as $link) {
        if ($link->getRel() == 'approval_url') {
            $redirectURL = $link->getHref();
            break;
        }
    }

    # We store the payment ID into the session
    Session::put('paypalPaymentId', $payment->getId());

    if (isset($redirectURL)) {
        return Redirect::away($redirectURL);
    }

    Session::put('error', 'There was a problem processing your payment. Please contact support.');

    return Redirect::to('/home');
    
   }

   public function execute(Request $request)
   {
    $apiContext = new \PayPal\Rest\ApiContext(
        new \PayPal\Auth\OAuthTokenCredential(
            'AQuhaFCcEvtrblCG6kMsEbDHtX1WTROHpmp4fcJRaIFiPaIT-NG_JLtf9wRAw5FWYzOulFa2BZDc4lRu',     // ClientID
            'EBPffLIfby3JB1qZorBITvCWAbsby24hoH2bDKG0q0fxl6CH5SEn7x24Xk8QHm5P4lrrIMvsi9iS7gbX'      // ClientSecret
        )
    );

    $payer = new Payer();
    $payer->setPaymentMethod("paypal");

    $item1 = new Item();
    $item1->setName('Ground Coffee 40 oz')
        ->setCurrency('USD')
        ->setQuantity(1)
        ->setSku("123123") // Similar to `item_number` in Classic API
        ->setPrice(7.5);
    $item2 = new Item();
    $item2->setName('Granola bars')
        ->setCurrency('USD')
        ->setQuantity(5)
        ->setSku("321321") // Similar to `item_number` in Classic API
        ->setPrice(2);

    $itemList = new ItemList();
    $itemList->setItems(array($item1, $item2));

    $details = new Details();
    $details->setShipping(1.2)
        ->setTax(1.3)
        ->setSubtotal(17.50);

    $amount = new Amount();
    $amount->setCurrency("USD")
        ->setTotal(20)
        ->setDetails($details);

    $transaction = new Transaction();
    $transaction->setAmount($amount)
        ->setItemList($itemList)
        ->setDescription("Payment description")
        ->setInvoiceNumber(uniqid());

    $redirectUrls = new RedirectUrls();
    $redirectUrls->setReturnUrl("http://laravel-paypal-example.test")
        ->setCancelUrl("http://laravel-paypal-example.test");

    // Add NO SHIPPING OPTION
    $inputFields = new InputFields();
    $inputFields->setNoShipping(1);

    $webProfile = new WebProfile();
    $webProfile->setName('test' . uniqid())->setInputFields($inputFields);

    $webProfileId = $webProfile->create($apiContext)->getId();

    $payment = new Payment();
    $payment->setExperienceProfileId($webProfileId); // no shipping
    $payment->setIntent("sale")
        ->setPayer($payer)
        ->setRedirectUrls($redirectUrls)
        ->setTransactions(array($transaction));

    try {
        $payment->create($apiContext);
    } catch (\Exception $ex) {
        echo $ex;
        exit(1);
    }

    return $payment;
   }

}
