@extends('layouts.landing')

@section('content')
<!--====== DISCOUNT PRODUCT PART START ======-->
<br><br><br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12 col-md-8">
            <div class="section-title pb-30">
                <h3 class="title mb-15">Available Product</h3>
            </div> <!-- section title -->
            <form action="/search" method="GET" class="navbar-form">
                <input class="form-control" name="search" placeholder="Search for Products" type="text" style="display: inline-block; width: 70%;">
                  <button type="submit" class="btn btn-success">Search</button>
            </form>
        </div>
    </div>
            <br><br>
    <div class="row justify-content-center"> 
        @if ($products and $products->isNotEmpty())    
        @foreach ($products as $product)
        <div class="col-lg-3 col-md-4">
            <div class="single-product-items">
                <div class="product-item-image">
                    <a href="/market/{{$product->id}}"><img style="height: 12rem;" src="product_images/{{$product->picture}}" alt="Product"></a>
                </div>
                <div class="product-item-content text-center mt-30">
                    <h5 class="product-title"><a href="/market/{{$product->id}}">{{$product->name}}</a></h5>
                    <span class="regular-price">N {{$product->price}}</span>
                    <div>
                        <button class="btn btn-success">
                            <a href="/market/{{$product->id}}" class="text-white text-decoration-none">View Details</a>
                        </button>
                    </div>
                </div>
                
            </div> <!-- single product items -->
        </div>
        @endforeach   
            @else
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-md-8">
                        <h2>No Product Found</h2>
                    </div>
                </div>
            @endif
    </div>

</div>

@endsection
