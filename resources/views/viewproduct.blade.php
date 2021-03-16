@extends('layouts.landing')

@section('style')
<link rel="stylesheet" href="{{ asset('assets/css/custom.css') }} ">
@endsection

@section('content')
<br><br><br><br><br><br><br><br>
    <div class="container">
        <div class="super_container">
            <div class="single_product">
                <div class="container-fluid" style=" background-color: #fff; padding: 11px;">
                    <div class="row">
                        <div class="col-lg-4 order-lg-2 order-1">
                            <div class="image_selected"><img style="height: 100%;" src="/product_images/{{$product->picture}}" alt="product"></div>
                        </div>
                        <div class="col-lg-6 order-3">
                            <div class="product_description">
                                <nav>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                                        <li class="breadcrumb-item"><a href="/market">Products</a></li>
                                        <li class="breadcrumb-item active">{{$category->category_name}}</li>
                                    </ol>
                                </nav>
                                <div class="product_name">{{$product->name}}</div>
                                <div> <span class="product_price">N {{$product->price}}</span> </div>
                                <hr class="singleline">
                                    <div class="p-2 m-1">
                                        {{$product->details}}
                                    </div>
                                    {{-- <div class="row" style="margin-top: 15px;">
                                        <div class="col-xs-6" style="margin-left: 15px;"> <span class="product_options">RAM Options</span><br> <button class="btn btn-primary btn-sm">4 GB</button> <button class="btn btn-primary btn-sm">8 GB</button> <button class="btn btn-primary btn-sm">16 GB</button> </div>
                                        <div class="col-xs-6" style="margin-left: 55px;"> <span class="product_options">Storage Options</span><br> <button class="btn btn-primary btn-sm">500 GB</button> <button class="btn btn-primary btn-sm">1 TB</button> </div>
                                    </div> --}}
                                </div>
                                <hr class="singleline">
                                <div class="row">
                                    <div class="col-xs-6" style="margin-left: 13px;">
                                        <span class="p-1 m-1"> <strong>Seller's Address :</strong> 10 street one, Lagos State </span>
                                        <span class="p-1 m-1"> <strong>Seller's Email Address :</strong> email@impact.com </span>
                                        <span class="p-1 m-1"> <strong>Seller's Phone Number :</strong> +2347061246688 </span>

                                    </div>
                                    <div class="col-xs-6">
                                        {{-- <button type="button" class="btn btn-primary shop-button">Contact The seller</button>
                                        <div class="product_fav"><i class="fas fa-heart"></i></div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
	</div>
@endsection
