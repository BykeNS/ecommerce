@extends('frontend.master')
@section('title','CART')

@section('content')
<section class="jumbotron text-left" id="jumbo">
    <div class="container">
        <h2 class="jumbotron-heading"><b>TEASHOP CART</b></h2>
     </div>
</section>
@if (Cart::content()->count() > 0 )
<div class="container mb-4">
    <div class="row">
        <div class="col-12 m-3">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col"> </th>
                            <th scope="col">Product</th>
                            <th scope="col">Available</th>
                            <th scope="col" class="text-left">Quantity</th>
                            <th scope="col" class="text-right">Price</th>
                            <th scope="col" class="text-right">Remove</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach(Cart::content() as $item)
                        <tr>
                            <td><img src="{{ url($item->options->image) }}" width="50px;" height="50px;"></td>
                            <td>{{ $item->name }}</td>
                            <td>In stock</td>
                            <td scope="col">
                             <form method="post" action="{{ url('cart/update',$item->rowId) }}">
                                    @csrf
                                <input type="hidden" value="{{$item->id}}" name="id" >
                                <input type="hidden" value="{{$item->name}}" name="name" >
                                <input type="number" value="{{$item->qty}}" autocomplete="off" name="qty" class="entry value" min="1" max="5">
                                &nbsp;
                                <input type="submit" name="submit" value="Update" class="btn btn-info" >
                             </form>
                            </td>
                            <td class="text-right">{{ number_format($item->price,2) }}</td>
                            <td class="text-right"><a href="{{url('remove-cart/'.$item->rowId)}}" onclick="return confirm('Are you sure you want to delete this item?');" <button class="btn btn-danger btn-md" > <i class="fas fa-trash"></i> </button></a> </td>
                        </tr>
                        @endforeach
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Sub-Total</td>
                            <td class="text-right">{{ Cart::subtotal() }} €</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Tax</td>
                            <td class="text-right" >{{ Cart::tax() }} €</td>
                        </tr>
            
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><strong>Total</strong></td>
                            <td class="text-right"><strong>{{Cart::total()}} €</strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
         <div class="col mb-2">
            <div class="row">
          {{--  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
            <script src="https://www.paypalobjects.com/api/checkout.js"></script>

<div id="paypal-button"></div>

<script>
  paypal.Button.render({
    env: 'sandbox', // Or 'production'
    // Set up the payment:
    // 1. Add a payment callback
    payment: function(data, actions) {
      // 2. Make a request to your server
      return actions.request.post('/api/create-payment')
        .then(function(res) {
          // 3. Return res.id from the response
          return res.id;
        });
    },
    // Execute the payment:
    // 1. Add an onAuthorize callback
    onAuthorize: function(data, actions) {
      // 2. Make a request to your server
      return actions.request.post('/api/execute-payment', {
        paymentID: data.paymentID,
        payerID:   data.payerID
      })
        .then(function(res) {
            console.log(res);
            Swal.fire(
              'Good job!',
              'You transaction was successfull!',
              'success'
            )
          // 3. Show the buyer a confirmation message.
        });
    }
  }, '#paypal-button');
</script>  --}}
               
                 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
                <script src="https://www.paypal.com/sdk/js?client-id=AQuhaFCcEvtrblCG6kMsEbDHtX1WTROHpmp4fcJRaIFiPaIT-NG_JLtf9wRAw5FWYzOulFa2BZDc4lRu"></script>
                <div class="col sm-3 ">
                    <div class="card p-4 " style="padding: 40px; background-color: #FEFEB3;">
                    <div id="paypal-button-container"></div>

                    <script>               
                        paypal.Buttons({
                          style: {
                         //   color:  'blue',
                            shape:  'pill',
                            label:  'pay',
                            //height: 45,
                            size: 'responsive'
                        },
                            createOrder: function(data, actions) {
                              return actions.order.create({
                                purchase_units: [{
                                  amount: {
                                 // test with 1 RSD amount working
                                    //value: '0.01' 
                                    value: '{{floatval( str_replace(',', '',Cart::total()))}}'
                                  }
                                }]
                              });
                            },
                            onApprove: function(data, actions) {
                              // This function captures the funds from the transaction.
                              return actions.order.capture().then(function(details) {
                                // This function shows a transaction success message to your buyer.
                                Swal.fire(
                                  'Good job!',
                                  'You transaction was successfull!',
                                  'success'
                                )       
                                .then((value) => {
                                  window.location.href = "{{url('/thanks')}}"
                                }).catch(swal.noop);
                                
                              });
                            }
                          }).render('#paypal-button-container');
                          
                          </script>
                          
                         
                          

                        </div>
                </div>
                <div class=" col-sm-6 ml-auto">
                     <script src="https://js.stripe.com/v3/"></script>
                    <form action="{{ url('/charge') }}" method="post" id="payment-form">
                        <div class="card " style="padding: 40px; background-color: #FEFEB3;">
                        <div class="form-row">
                           
                            <b>Your Name</b>
                            <input type="text" name="name" placeholder="Yohn Doe" class="form-control m-1"/>
                            <b>Your Email</b>
                            <input type="email" name="email" placeholder="john@gmail.com" class="form-control m-1"/>
                            <b>Your Phone</b>
                            <input type="tel" name="phone" placeholder="(941) 555-0123" class="form-control m-1" />
                            <b>Card Number</b>
                            <div id="card-element" class="form-control"> </div>
                            <div id="card-errors" role="alert"></div><br><br>
                        
                        <button class="btn btn-primary ml-0" style="float:right; margin-top: 30px;">Submit Payment</button><br>
                        @csrf
                        </div>
                    </div>
                    </form>

                </div> 
                
  <script>
     // Create a Stripe client.
    var stripe = Stripe('pk_test_51D0pyOK4ThPYMLi4DiTMiGbstPBPhpzxu5MIIYWWQBSWHbiBc9T25B3QBmnYlWLyuOAK8Q0ahfxyOEpGybPKv1NO00dOP4jxAw');

    // Create an instance of Elements.
    var elements = stripe.elements();

    // Custom styling can be passed to options when creating an Element.
    // (Note that this demo uses a wider set of styles than the guide below.)
    var style = {
    base: {
    color: '#32325d',
    fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
    fontSmoothing: 'antialiased',
    fontSize: '16px',
    '::placeholder': {
        color: '#aab7c4'
    }
    },
    invalid: {
    color: '#fa755a',
    iconColor: '#fa755a'
    }
    };

    // Create an instance of the card Element.
    var card = elements.create('card', {style: style});

    // Add an instance of the card Element into the `card-element` <div>.
    card.mount('#card-element');

    // Handle real-time validation errors from the card Element.
    card.addEventListener('change', function(event) {
    var displayError = document.getElementById('card-errors');
    if (event.error) {
    displayError.textContent = event.error.message;
    } else {
    displayError.textContent = '';
    }
    });

    // Handle form submission.
    var form = document.getElementById('payment-form');
    form.addEventListener('submit', function(event) {
    event.preventDefault();

    stripe.createToken(card).then(function(result) {
    if (result.error) {
        // Inform the user if there was an error.
        var errorElement = document.getElementById('card-errors');
        errorElement.textContent = result.error.message;
    } else {
        // Send the token to your server.
        stripeTokenHandler(result.token);
    }
    });
    });

    // Submit the form with the token ID.
    function stripeTokenHandler(token) {
    // Insert the token ID into the form so it gets submitted to the server
    var form = document.getElementById('payment-form');
    var hiddenInput = document.createElement('input');
    hiddenInput.setAttribute('type', 'hidden');
    hiddenInput.setAttribute('name', 'stripeToken');
    hiddenInput.setAttribute('value', token.id);
    form.appendChild(hiddenInput);

    // Submit the form
    form.submit();
    }
 </script>
                
                
            </div>
        </div>
    </div>
</div>

@else
<h4 class="text-center m-4">Your cart is empty</h4>
<div class=" col-md-4 mb-3 text-center">
   <a href="{{url('/')}}" <button class="btn btn-warning text-center" >&larr; Go back Shopping</button></a>
</div>
@endif

@endsection

