@extends('layouts.landing')

@section('content')
<br><br><br><br><br><br><br><br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="section-title text-center pb-25">
                    <h3 class="title mb-15">Our Market Place</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm od tempor incididunt ut labore
                        et dolore magna aliqua.</p>
                </div> <!-- section title -->
            </div>
        </div>
        <div class="row">

            @foreach ($products as $product)

            <div class="col-md-3 mt-3">
                <div class="single-product-items">
                    <div class="product-item-image">
                        <a href="/market/{{$product->id}}"><img src="../../product_images/{{$product->picture}}" alt="Product"></a>
                    </div>
                    <div class="product-item-content text-center mt-30">
                        <h5 class="product-title"><a href="/market/{{$product->id}}">{{$product->name}}</a></h5>
                        <span class="regular-price">N {{$product->price}}</span>
                    </div>
                    <div>
                        <button class="btn btn-success">
                            <a href="/market/{{$product->id}}" class="text-white text-decoration-none">View Details</a>
                        </button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
