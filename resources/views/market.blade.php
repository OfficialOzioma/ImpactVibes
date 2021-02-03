@extends('layouts.landing')

@section('content')


<!--====== DISCOUNT PRODUCT PART START ======-->
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
        <div class="col-lg-3">
            <div class="single-form form-group">
                <input type="text" name="name" placeholder="Search" required="required">

            </div>
            <button class="btn btn-success" type="submit">Search</button>

        </div>
    </div>
    <! </div>
        <section id="product" class="product-area pt-100 pb-130">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4">
                        <div class="collection-menu text-center mt-30">
                            <h4 class="collection-tilte">OUR MARKET PLACE</h4>
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">
                                @foreach ($categories as $category)
                                    <a id="v-pills-{{$category->id}}-tab" data-toggle="pill" href="/market/category/{{$category->id}}" role="tab"
                                    aria-controls="v-pills-decorative" aria-selected="false">{{$category->category_name}}</a>
                                @endforeach
                                {{-- <a class="active" id="v-pills-furniture-tab" data-toggle="pill"
                                    href="#v-pills-furniture" role="tab" aria-controls="v-pills-furniture"
                                    aria-selected="true">London Used</a></li>

                                <a id="v-pills-decorative-tab" data-toggle="pill" href="#v-pills-decorative" role="tab"
                                    aria-controls="v-pills-decorative" aria-selected="false">Farly Used</a>

                                <a id="v-pills-lighting-tab" data-toggle="pill" href="#v-pills-lighting" role="tab"
                                    aria-controls="v-pills-lighting" aria-selected="false">New</a> --}}



                            </div> <!-- nav -->
                        </div> <!-- collection menu -->
                    </div>
                    <div class="col-lg-9 col-md-8">
                        <div class="row">
                            @foreach ($products as $product)
                            <div class="col-md-3 mt-3">
                                <div class="single-product-items">
                                    <div class="product-item-image">
                                        <a href="/market/{{$product->id}}"><img src="product_images/{{$product->picture}}" alt="Product"></a>
                                        {{-- <div class="product-discount-tag">
                                            <p>-60%</p>
                                        </div> --}}
                                    </div>
                                    <div class="product-item-content text-center mt-30">
                                        <h5 class="product-title"><a href="/market/{{$product->id}}">{{$product->name}}</a></h5>
                                        {{-- <ul class="rating">
                                            <li><i class="lni-star-filled"></i></li>
                                            <li><i class="lni-star-filled"></i></li>
                                            <li><i class="lni-star-filled"></i></li>
                                            <li><i class="lni-star-filled"></i></li>
                                        </ul> --}}
                                        <span class="regular-price">N {{$product->price}}</span>
                                        {{-- <span class="discount-price"></span> --}}
                                    </div>
                                    <div>
                                        <button class="btn btn-success">
                                            <a href="/market/{{$product->id}}" class="text-white text-decoration-none">View Details</a>
                                        </button>
                                    </div>
                                </div> <!-- single product items -->
                            </div>
                            @endforeach

                            {{-- <div class="col-md-3">
                                <div class="single-product-items">
                                    <div class="product-item-image">
                                        <a href="#"><img src="assets/images/product/p-2.jpg" alt="Product"></a>
                                        <div class="product-discount-tag">
                                            <p>-20%</p>
                                        </div>
                                    </div>
                                    <div class="product-item-content text-center mt-30">
                                        <h5 class="product-title"><a href="#">For Sale</a></h5>
                                        <ul class="rating">
                                            <li><i class="lni-star-filled"></i></li>
                                            <li><i class="lni-star-filled"></i></li>
                                            <li><i class="lni-star-filled"></i></li>
                                            <li><i class="lni-star-filled"></i></li>
                                        </ul>
                                        <span class="regular-price">$129.00</span>
                                        <span class="discount-price">$159.00</span>
                                    </div>
                                    <div>
                                        <button class="btn btn-success">View Details</button>
                                    </div>
                                </div> <!-- single product items -->
                            </div>
                            <div class="col-md-3">
                                <div class="single-product-items">
                                    <div class="product-item-image">
                                        <a href="#"><img src="assets/images/product/p-3.jpg" alt="Product"></a>
                                        <div class="product-discount-tag">
                                            <p>-10%</p>
                                        </div>
                                    </div>
                                    <div class="product-item-content text-center mt-30">
                                        <h5 class="product-title"><a href="#">For Sale</a></h5>
                                        <ul class="rating">
                                            <li><i class="lni-star-filled"></i></li>
                                            <li><i class="lni-star-filled"></i></li>
                                            <li><i class="lni-star-filled"></i></li>
                                            <li><i class="lni-star"></i></li>
                                        </ul>
                                        <span class="regular-price">$89.00</span>
                                        <span class="discount-price">$129.00</span>
                                    </div>
                                    <div>
                                        <button class="btn btn-success">View Details</button>
                                    </div>
                                </div> <!-- single product items -->
                            </div>
                            <div class="col-md-3">
                                <div class="single-product-items">
                                    <div class="product-item-image">
                                        <a href="#"><img src="assets/images/product/p-3.jpg" alt="Product"></a>
                                        <div class="product-discount-tag">
                                            <p>-10%</p>
                                        </div>
                                    </div>
                                    <div class="product-item-content text-center mt-30">
                                        <h5 class="product-title"><a href="#">For Sale</a></h5>
                                        <ul class="rating">
                                            <li><i class="lni-star-filled"></i></li>
                                            <li><i class="lni-star-filled"></i></li>
                                            <li><i class="lni-star-filled"></i></li>
                                            <li><i class="lni-star"></i></li>
                                        </ul>
                                        <span class="regular-price">$89.00</span>
                                        <span class="discount-price">$129.00</span>
                                    </div>
                                    <div>
                                        <button class="btn btn-success">View Details</button>
                                    </div>
                                </div> <!-- single product items -->
                            </div> --}}


                        </div>
                        <br><hr>
                        <div class="row">

                            <div class="col-md-3">
                                <div class="single-product-items">
                                    <div class="product-item-image">
                                        <a href="#"><img src="assets/images/product/p-1.jpeg" alt="Product"></a>
                                        <div class="product-discount-tag">
                                            <p>-60%</p>
                                        </div>
                                    </div>
                                    <div class="product-item-content text-center mt-30">
                                        <h5 class="product-title"><a href="#">For Sale</a></h5>
                                        <ul class="rating">
                                            <li><i class="lni-star-filled"></i></li>
                                            <li><i class="lni-star-filled"></i></li>
                                            <li><i class="lni-star-filled"></i></li>
                                            <li><i class="lni-star-filled"></i></li>
                                        </ul>
                                        <span class="regular-price">$49.00</span>
                                        <span class="discount-price">$69.00</span>
                                    </div>
                                    <div>
                                        <button class="btn btn-success">View Details</button>
                                    </div>
                                </div> <!-- single product items -->
                            </div>
                            <div class="col-md-3">
                                <div class="single-product-items">
                                    <div class="product-item-image">
                                        <a href="#"><img src="assets/images/product/p-2.jpg" alt="Product"></a>
                                        <div class="product-discount-tag">
                                            <p>-20%</p>
                                        </div>
                                    </div>
                                    <div class="product-item-content text-center mt-30">
                                        <h5 class="product-title"><a href="#">For Sale</a></h5>
                                        <ul class="rating">
                                            <li><i class="lni-star-filled"></i></li>
                                            <li><i class="lni-star-filled"></i></li>
                                            <li><i class="lni-star-filled"></i></li>
                                            <li><i class="lni-star-filled"></i></li>
                                        </ul>
                                        <span class="regular-price">$129.00</span>
                                        <span class="discount-price">$159.00</span>
                                    </div>
                                    <div>
                                        <button class="btn btn-success">View Details</button>
                                    </div>
                                </div> <!-- single product items -->
                            </div>
                            <div class="col-md-3">
                                <div class="single-product-items">
                                    <div class="product-item-image">
                                        <a href="#"><img src="assets/images/product/p-3.jpg" alt="Product"></a>
                                        <div class="product-discount-tag">
                                            <p>-10%</p>
                                        </div>
                                    </div>
                                    <div class="product-item-content text-center mt-30">
                                        <h5 class="product-title"><a href="#">For Sale</a></h5>
                                        <ul class="rating">
                                            <li><i class="lni-star-filled"></i></li>
                                            <li><i class="lni-star-filled"></i></li>
                                            <li><i class="lni-star-filled"></i></li>
                                            <li><i class="lni-star"></i></li>
                                        </ul>
                                        <span class="regular-price">$89.00</span>
                                        <span class="discount-price">$129.00</span>
                                    </div>
                                    <div>
                                        <button class="btn btn-success">View Details</button>
                                    </div>
                                </div> <!-- single product items -->
                            </div>
                            <div class="col-md-3">
                                <div class="single-product-items">
                                    <div class="product-item-image">
                                        <a href="#"><img src="assets/images/product/p-3.jpg" alt="Product"></a>
                                        <div class="product-discount-tag">
                                            <p>-10%</p>
                                        </div>
                                    </div>
                                    <div class="product-item-content text-center mt-30">
                                        <h5 class="product-title"><a href="#">For Sale</a></h5>
                                        <ul class="rating">
                                            <li><i class="lni-star-filled"></i></li>
                                            <li><i class="lni-star-filled"></i></li>
                                            <li><i class="lni-star-filled"></i></li>
                                            <li><i class="lni-star"></i></li>
                                        </ul>
                                        <span class="regular-price">$89.00</span>
                                        <span class="discount-price">$129.00</span>
                                    </div>
                                    <div>
                                        <button class="btn btn-success">View Details</button>
                                    </div>
                                </div> <!-- single product items -->
                            </div>


                        </div>


                    </div>

                </div>

                <!-- tab content -->
            </div>
</div> <!-- row -->
</div> <!-- container -->
</section>

@endsection
