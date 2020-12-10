@extends('frontend.master')
@section('title', $category_name->name)

@section('content')
@if ($category_name) 
<div class="banner_inner ">
    <div class="services-breadcrumb">
        <div class="inner_breadcrumb">

            <ul class="short">
                <li>
                    <a href="/">Home</a>
                    <i>|</i>
                </li>
                <li>{{ $category_name->name}}</li>
            </ul>
        </div>
    </div>
@endif
</div><br><br>
  
<div class="page-head">
  <div class="container">
    @if(count($products) == 0)
    <div class="alert alert-info text-center">
        <strong>Hey...</strong> No Product in  {{ $category_name->name}} category !!!.
    </div>
    @else
    <h4 class="text-center mb-5">Total product <span class="badge badge-primary">{{count($products)}}</span></h4>
    @endif  
      <div class="row">
               
        @foreach ($products as $product)
        <div class="col-md-3 product-men women_two" id="shop">

            <div class="product-googles-info googles">
                <div class="men-pro-item">
                    @foreach(explode(',' ,$product->image) as $image)
                    @if ($loop->first)
                    <div class="men-thumb-item">
                        <img src="{{ asset('images/'.$image) }}" class="img-fluid" alt=""  lazy="loading">
                        <div class="men-cart-pro">
                            <div class="inner-men-cart-pro">
                                <a href="{{ url('/product/'.$product->slug) }}" class="link-product-add-cart">Quick View</a>
                            </div>
                        </div>
                        <span class="product-new-top">New</span>
                    </div>
                    @endif
                    @endforeach
                    <div class="item-info-product">
                        <div class="info-product-price">
                            <div class="grid_meta">
                                <div class="product_price"><br>
                                    <h4>
                                        <a href="{{ url('/product/'.$product->slug) }}">{{ $product->name }}</a>
                                    </h4>
                                    <div class="grid-price mt-2">
                                        <span class="money ">${{ $product->formatPrice() }}</span>
                                    </div>
                                </div>
                                <ul class="stars">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="googles single-item hvr-outline-out">
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="googles_item" value="Farenheit">
                                    <input type="hidden" name="amount" value="575.00">
                                    <button type="submit" class="googles-cart pgoogles-cart">
                                        <i class="fas fa-cart-plus"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
             </div>
            <br>
         </div>
        @endforeach
    </div>   
  </div>
</div>
 
 @endsection