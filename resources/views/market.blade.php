@extends('layouts.landing')

@section('content')
<!--====== DISCOUNT PRODUCT PART START ======-->
<br><br><br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12 col-md-8">
            <div class="section-title pb-30">
                <h3 class="title mb-15">Our Market Place</h3>
                <p>
                    …brings the world closer to you – buyers and founders, to find to buy and to sell, 
                    whenever you choose. All you need to do is, have a budget
                </p>
            </div> <!-- section title -->
            <form action="/search" method="GET" class="navbar-form">
                <input class="form-control" name="search" placeholder="Search for Products" type="text" style="display: inline-block; width: 70%;">
                  <button type="submit" class="btn btn-success">Search</button>
            </form>
        </div>
    </div>
            <br><br>
    <div class="row justify-content-center"> 
        <div style="background: #4e4444" class="col-lg-3 col-md-4">
            <h4 style="margin: 7px; color: #f78152" class="title mb-15">Market Categories</h4>
                {{-- <div class="product-item-content text-center mt-30"> --}}
                <ul>
                    @foreach ($categories as $category)
                    <li style="margin: 10px;">
                        <div class="info-content">
                            <h5 class="product-title"><a style="color: #ffffff;" href="/market/category/{{$category->id}}">{{$category->category_name}}</a></h5>
                        </div>
                    </li>
                    @endforeach   
                </ul>              
                {{-- </div> --}}
        </div>  
        
        <div class="col-lg-9 col-md-8">
            <div class="row justify-content-center"> 
                @foreach ($products as $product)
                <div class="col-lg-4 col-md-6">
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
            </div> 
    </div>  
    </div>

</div>

@endsection
