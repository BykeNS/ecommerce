@extends('frontend.master')
@section('title','Thank You')

@section('content')
<div class="jumbotron text-center">
    <h1 class="display-3">Thanks For Your Purchase!</h1>
    @php
        Cart::destroy();
    @endphp
    <p class="lead"><strong>Please check your email</strong> for further instructions on how to complete your account setup.</p>
    <hr>
    <p>
      Having trouble? <a href="/contact">Contact us</a>
    </p>
    <p class="lead">
        <a href="{{url('/')}}" <button class="btn btn-warning text-center" >&larr; Go back Shopping</button></a>
    </p>
  </div>
  @endsection