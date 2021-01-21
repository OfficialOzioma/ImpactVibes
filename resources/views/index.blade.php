@extends('layouts.landing')

@section('content')

<!--====== SLIDER PART START ======-->

<section id="home" class="slider-area pt-100">
    <div class="container-fluid position-relative">
        <div class="slider-active">
            <div class="single-slider">
                <div class="slider-bg">
                    <div class="row no-gutters align-items-center ">
                        <div class="col-lg-4 col-md-5">
                            <div class="slider-product-image d-none d-md-block">
                                <img src="assets/images/slider/1.svg" alt="Slider">
                                <div class="slider-discount-tag">
                                    <p>Explore</p>
                                </div>
                            </div> <!-- slider product image -->
                        </div>
                        <div class="col-lg-8 col-md-7">
                            <div class="slider-product-content">
                            <br><br>
                
                                <h3 class="slider-title mb-10" data-animation="fadeInUp" data-delay="0.3s"><span>Hi! Welcome</span> to the <span>Vibes</span></h3>
                                <p class="mb-25" data-animation="fadeInUp" data-delay="0.9s">We’re your all – in – one place impact companion – providing  <br>
                                YOU and EVERYONE with varied exciting services and opportunities, every innovating step of the way.</p>
                                <a class="main-btn" href="#" data-animation="fadeInUp" data-delay="1.5s">Explore More <i class="lni-chevron-right"></i></a>
                            </div> <!-- slider product content -->
                        </div>
                    </div> <!-- row -->
                </div> <!-- container -->
            </div> <!-- single slider -->

            <div class="single-slider">
                    <div class="slider-bg">
                        <div class="row no-gutters align-items-center">
                            <div class="col-lg-4 col-md-5">
                                <div class="slider-product-image d-none d-md-block">
                                    <img src="assets/images/slider/2.svg" alt="Slider">
                                    <div class="slider-discount-tag">
                                        <p>Connect</p>
                                    </div>
                                </div> <!-- slider product image -->
                            </div>
                            <div class="col-lg-8 col-md-7">
                                <div class="slider-product-content">
                                <br><br>
                                    <h1 class="slider-title mb-10" data-animation="fadeInUp" data-delay="0.3s"><span>We are</span> changing the <span>narrative</span></h1>
                                    <p class="mb-25" data-animation="fadeInUp" data-delay="0.9s">One day however a small line of blind text by the name of Lorem Ipsum <br> decided to leave for the far World of Grammar.</p>
                                    <a class="main-btn" href="#" data-animation="fadeInUp" data-delay="1.5s">Explore More <i class="lni-chevron-right"></i></a>
                                </div> <!-- slider product content -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- container -->
            </div> <!-- single slider -->

            <div class="single-slider">
                    <div class="slider-bg">
                        <div class="row no-gutters align-items-center">
                            <div class="col-lg-4 col-md-5">
                                <div class="slider-product-image d-none d-md-block">
                                    <img src="assets/images/slider/3.svg" alt="Slider">
                                    <div class="slider-discount-tag">
                                        <p>Grow</p>
                                    </div>
                                </div> <!-- slider product image -->
                            </div>
                            <div class="col-lg-8 col-md-7">
                                <div class="slider-product-content">
                                <br><br>
                                    <h1 class="slider-title mb-10" data-animation="fadeInUp" data-delay="0.3s"><span>Brace up</span> for the  <span>Impact</span></h1>
                                    <p class="mb-25" data-animation="fadeInUp" data-delay="0.9s">One day however a small line of blind text by the name of Lorem Ipsum <br> decided to leave for the far World of Grammar.</p>
                                    <a class="main-btn" href="/contact" data-animation="fadeInUp" data-delay="1.5s">Contact Us <i class="lni-chevron-right"></i></a>
                                </div> <!-- slider product content -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- container -->
            </div> <!-- single slider -->
        </div> <!-- slider active -->
        <div class="slider-social">
            <div class="row justify-content-end">
                <div class="col-lg-7 col-md-6">
                    <ul class="social text-right">
                        <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                        <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                        <li><a href="#"><i class="lni-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- container fluid -->
</section>

<!--====== SLIDER PART ENDS ======-->

<!--====== DISCOUNT PRODUCT PART START ======-->

<section id="discount-product" class="discount-product pt-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="single-discount-product mt-30">
                    <div class="product-image">
                        <img src="assets/images/services/3.svg" alt="Product">
                    </div> <!-- product image -->
                    <div class="product-content">
                        <h4 class="content-title mb-15">Our Impacts</h4>
                        <a href="#" style="color:red">Click Here<i class="lni-chevron-right"></i></a>
                    </div> <!-- product content -->
                </div> <!-- single discount product -->
            </div>
            <div class="col-lg-6">
                <div class="single-discount-product mt-30">
                    <div class="product-image">
                        <img src="assets/images/services/2.svg" alt="opportunity">
                    </div> <!-- product image -->
                    <div class="product-content">
                        <h4 class="content-title mb-15">Hot Opportunities</h4>
                        <a style="color:red" href="/opportunity">Click to view<i class="lni-chevron-right"></i></a>
                    </div> <!-- product content -->
                </div> <!-- single discount product -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== DISCOUNT PRODUCT PART ENDS ======-->

<!--====== PRODUCT PART START ======-->

<section id="product" class="product-area pt-100 pb-130">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4">
                <div class="collection-menu text-center mt-30">
                    <h4 class="collection-tilte">OUR MARKET PLACE</h4>
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a id="v-pills-lighting-tab" data-toggle="pill" href="#v-pills-lighting" role="tab" aria-controls="v-pills-lighting" aria-selected="false">Visit Our Market</a>

                               
                    </div> <!-- nav -->
                </div> <!-- collection menu -->
            </div>
            <div class="col-lg-9 col-md-8">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-furniture" role="tabpanel" aria-labelledby="v-pills-furniture-tab">
                        <div class="product-items mt-30">
                            <div class="row product-items-active">
                                <div class="col-md-4">
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
                                    </div> <!-- single product items -->
                                </div>
                                <div class="col-md-4">
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
                                    </div> <!-- single product items -->
                                </div>
                                <div class="col-md-4">
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
                                    </div> <!-- single product items -->
                                </div>
                                <div class="col-md-4">
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
                                            <span class="regular-price">$59.00</span>
                                            <span class="discount-price">$69.00</span>
                                        </div>
                                    </div> <!-- single product items -->
                                </div>
                                <div class="col-md-4">
                                    <div class="single-product-items">
                                        <div class="product-item-image">
                                            <a href="#"><img src="assets/images/product/p-2.jpg" alt="Product"></a>
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
                                            <span class="regular-price">$59.00</span>
                                            <span class="discount-price">$69.00</span>
                                        </div>
                                    </div> <!-- single product items -->
                                </div>
                            </div> <!-- row -->
                        </div> <!-- product items -->
                    </div> <!-- tab pane -->

                    <div class="tab-pane fade" id="v-pills-decorative" role="tabpanel" aria-labelledby="v-pills-decorative-tab">
                        <div class="product-items mt-30">
                            <div class="row product-items-active">
                                <div class="col-md-4">
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
                                            <span class="regular-price">$59.00</span>
                                            <span class="discount-price">$69.00</span>
                                        </div>
                                    </div> <!-- single product items -->
                                </div>
                                <div class="col-md-4">
                                    <div class="single-product-items">
                                        <div class="product-item-image">
                                            <a href="#"><img src="assets/images/product/p-2.jpg" alt="Product"></a>
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
                                            <span class="regular-price">$59.00</span>
                                            <span class="discount-price">$69.00</span>
                                        </div>
                                    </div> <!-- single product items -->
                                </div>
                                <div class="col-md-4">
                                    <div class="single-product-items">
                                        <div class="product-item-image">
                                            <a href="#"><img src="assets/images/product/p-3.jpg" alt="Product"></a>
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
                                            <span class="regular-price">$59.00</span>
                                            <span class="discount-price">$69.00</span>
                                        </div>
                                    </div> <!-- single product items -->
                                </div>
                                <div class="col-md-4">
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
                                            <span class="regular-price">$59.00</span>
                                            <span class="discount-price">$69.00</span>
                                        </div>
                                    </div> <!-- single product items -->
                                </div>
                                <div class="col-md-4">
                                    <div class="single-product-items">
                                        <div class="product-item-image">
                                            <a href="#"><img src="assets/images/product/p-2.jpg" alt="Product"></a>
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
                                            <span class="regular-price">$59.00</span>
                                            <span class="discount-price">$69.00</span>
                                        </div>
                                    </div> <!-- single product items -->
                                </div>
                            </div> <!-- row -->
                        </div> <!-- product items -->
                    </div> <!-- tab pane -->

                    <div class="tab-pane fade" id="v-pills-lighting" role="tabpanel" aria-labelledby="v-pills-lighting-tab">
                        <div class="product-items mt-30">
                            <div class="row product-items-active">
                                <div class="col-md-4">
                                    <div class="single-product-items">
                                        <div class="product-item-image">
                                            <a href="#"><img src="assets/images/product/p-1.jpeg" alt="Product"></a>
                                            <div class="product-discount-tag">
                                                <p>-60%</p>
                                            </div>
                                        </div>
                                        <div class="product-item-content text-center mt-30">
                                            <h5 class="product-title"><a href="#">Touchwood Chair</a></h5>
                                            <ul class="rating">
                                                <li><i class="lni-star-filled"></i></li>
                                                <li><i class="lni-star-filled"></i></li>
                                                <li><i class="lni-star-filled"></i></li>
                                                <li><i class="lni-star-filled"></i></li>
                                            </ul>
                                            <span class="regular-price">$59.00</span>
                                            <span class="discount-price">$69.00</span>
                                        </div>
                                    </div> <!-- single product items -->
                                </div>
                                <div class="col-md-4">
                                    <div class="single-product-items">
                                        <div class="product-item-image">
                                            <a href="#"><img src="assets/images/product/p-2.jpg" alt="Product"></a>
                                            <div class="product-discount-tag">
                                                <p>-60%</p>
                                            </div>
                                        </div>
                                        <div class="product-item-content text-center mt-30">
                                            <h5 class="product-title"><a href="#">Touchwood Chair</a></h5>
                                            <ul class="rating">
                                                <li><i class="lni-star-filled"></i></li>
                                                <li><i class="lni-star-filled"></i></li>
                                                <li><i class="lni-star-filled"></i></li>
                                                <li><i class="lni-star-filled"></i></li>
                                            </ul>
                                            <span class="regular-price">$59.00</span>
                                            <span class="discount-price">$69.00</span>
                                        </div>
                                    </div> <!-- single product items -->
                                </div>
                                <div class="col-md-4">
                                    <div class="single-product-items">
                                        <div class="product-item-image">
                                            <a href="#"><img src="assets/images/product/p-3.jpg" alt="Product"></a>
                                            <div class="product-discount-tag">
                                                <p>-60%</p>
                                            </div>
                                        </div>
                                        <div class="product-item-content text-center mt-30">
                                            <h5 class="product-title"><a href="#">Touchwood Chair</a></h5>
                                            <ul class="rating">
                                                <li><i class="lni-star-filled"></i></li>
                                                <li><i class="lni-star-filled"></i></li>
                                                <li><i class="lni-star-filled"></i></li>
                                                <li><i class="lni-star-filled"></i></li>
                                            </ul>
                                            <span class="regular-price">$59.00</span>
                                            <span class="discount-price">$69.00</span>
                                        </div>
                                    </div> <!-- single product items -->
                                </div>
                                <div class="col-md-4">
                                    <div class="single-product-items">
                                        <div class="product-item-image">
                                            <a href="#"><img src="assets/images/product/p-1.jpeg" alt="Product"></a>
                                            <div class="product-discount-tag">
                                                <p>-60%</p>
                                            </div>
                                        </div>
                                        <div class="product-item-content text-center mt-30">
                                            <h5 class="product-title"><a href="#">Touchwood Chair</a></h5>
                                            <ul class="rating">
                                                <li><i class="lni-star-filled"></i></li>
                                                <li><i class="lni-star-filled"></i></li>
                                                <li><i class="lni-star-filled"></i></li>
                                                <li><i class="lni-star-filled"></i></li>
                                            </ul>
                                            <span class="regular-price">$59.00</span>
                                            <span class="discount-price">$69.00</span>
                                        </div>
                                    </div> <!-- single product items -->
                                </div>
                                <div class="col-md-4">
                                    <div class="single-product-items">
                                        <div class="product-item-image">
                                            <a href="#"><img src="assets/images/product/p-2.jpg" alt="Product"></a>
                                            <div class="product-discount-tag">
                                                <p>-60%</p>
                                            </div>
                                        </div>
                                        <div class="product-item-content text-center mt-30">
                                            <h5 class="product-title"><a href="#">Touchwood Chair</a></h5>
                                            <ul class="rating">
                                                <li><i class="lni-star-filled"></i></li>
                                                <li><i class="lni-star-filled"></i></li>
                                                <li><i class="lni-star-filled"></i></li>
                                                <li><i class="lni-star-filled"></i></li>
                                            </ul>
                                            <span class="regular-price">$59.00</span>
                                            <span class="discount-price">$69.00</span>
                                        </div>
                                    </div> <!-- single product items -->
                                </div>
                            </div> <!-- row -->
                        </div> <!-- product items -->
                    </div> <!-- tab pane -->

                    <div class="tab-pane fade" id="v-pills-outdoor" role="tabpanel" aria-labelledby="v-pills-outdoor-tab">
                        <div class="product-items mt-30">
                            <div class="row product-items-active">
                                <div class="col-md-4">
                                    <div class="single-product-items">
                                        <div class="product-item-image">
                                            <a href="#"><img src="assets/images/product/p-1.jpeg" alt="Product"></a>
                                            <div class="product-discount-tag">
                                                <p>-60%</p>
                                            </div>
                                        </div>
                                        <div class="product-item-content text-center mt-30">
                                            <h5 class="product-title"><a href="#">Touchwood Chair</a></h5>
                                            <ul class="rating">
                                                <li><i class="lni-star-filled"></i></li>
                                                <li><i class="lni-star-filled"></i></li>
                                                <li><i class="lni-star-filled"></i></li>
                                                <li><i class="lni-star-filled"></i></li>
                                            </ul>
                                            <span class="regular-price">$59.00</span>
                                            <span class="discount-price">$69.00</span>
                                        </div>
                                    </div> <!-- single product items -->
                                </div>
                                <div class="col-md-4">
                                    <div class="single-product-items">
                                        <div class="product-item-image">
                                            <a href="#"><img src="assets/images/product/p-2.jpg" alt="Product"></a>
                                            <div class="product-discount-tag">
                                                <p>-60%</p>
                                            </div>
                                        </div>
                                        <div class="product-item-content text-center mt-30">
                                            <h5 class="product-title"><a href="#">Touchwood Chair</a></h5>
                                            <ul class="rating">
                                                <li><i class="lni-star-filled"></i></li>
                                                <li><i class="lni-star-filled"></i></li>
                                                <li><i class="lni-star-filled"></i></li>
                                                <li><i class="lni-star-filled"></i></li>
                                            </ul>
                                            <span class="regular-price">$59.00</span>
                                            <span class="discount-price">$69.00</span>
                                        </div>
                                    </div> <!-- single product items -->
                                </div>
                                <div class="col-md-4">
                                    <div class="single-product-items">
                                        <div class="product-item-image">
                                            <a href="#"><img src="assets/images/product/p-3.jpg" alt="Product"></a>
                                            <div class="product-discount-tag">
                                                <p>-60%</p>
                                            </div>
                                        </div>
                                        <div class="product-item-content text-center mt-30">
                                            <h5 class="product-title"><a href="#">Touchwood Chair</a></h5>
                                            <ul class="rating">
                                                <li><i class="lni-star-filled"></i></li>
                                                <li><i class="lni-star-filled"></i></li>
                                                <li><i class="lni-star-filled"></i></li>
                                                <li><i class="lni-star-filled"></i></li>
                                            </ul>
                                            <span class="regular-price">$59.00</span>
                                            <span class="discount-price">$69.00</span>
                                        </div>
                                    </div> <!-- single product items -->
                                </div>
                                <div class="col-md-4">
                                    <div class="single-product-items">
                                        <div class="product-item-image">
                                            <a href="#"><img src="assets/images/product/p-1.jpeg" alt="Product"></a>
                                            <div class="product-discount-tag">
                                                <p>-60%</p>
                                            </div>
                                        </div>
                                        <div class="product-item-content text-center mt-30">
                                            <h5 class="product-title"><a href="#">Touchwood Chair</a></h5>
                                            <ul class="rating">
                                                <li><i class="lni-star-filled"></i></li>
                                                <li><i class="lni-star-filled"></i></li>
                                                <li><i class="lni-star-filled"></i></li>
                                                <li><i class="lni-star-filled"></i></li>
                                            </ul>
                                            <span class="regular-price">$59.00</span>
                                            <span class="discount-price">$69.00</span>
                                        </div>
                                    </div> <!-- single product items -->
                                </div>
                                <div class="col-md-4">
                                    <div class="single-product-items">
                                        <div class="product-item-image">
                                            <a href="#"><img src="assets/images/product/p-2.jpg" alt="Product"></a>
                                            <div class="product-discount-tag">
                                                <p>-60%</p>
                                            </div>
                                        </div>
                                        <div class="product-item-content text-center mt-30">
                                            <h5 class="product-title"><a href="#">Touchwood Chair</a></h5>
                                            <ul class="rating">
                                                <li><i class="lni-star-filled"></i></li>
                                                <li><i class="lni-star-filled"></i></li>
                                                <li><i class="lni-star-filled"></i></li>
                                                <li><i class="lni-star-filled"></i></li>
                                            </ul>
                                            <span class="regular-price">$59.00</span>
                                            <span class="discount-price">$69.00</span>
                                        </div>
                                    </div> <!-- single product items -->
                                </div>
                            </div> <!-- row -->
                        </div> <!-- product items -->
                    </div> <!-- tab pane -->

                    <div class="tab-pane fade" id="v-pills-storage" role="tabpanel" aria-labelledby="v-pills-storage-tab">
                        <div class="product-items mt-30">
                            <div class="row product-items-active">
                                <div class="col-md-4">
                                    <div class="single-product-items">
                                        <div class="product-item-image">
                                            <a href="#"><img src="assets/images/product/p-1.jpeg" alt="Product"></a>
                                            <div class="product-discount-tag">
                                                <p>-60%</p>
                                            </div>
                                        </div>
                                        <div class="product-item-content text-center mt-30">
                                            <h5 class="product-title"><a href="#">Touchwood Chair</a></h5>
                                            <ul class="rating">
                                                <li><i class="lni-star-filled"></i></li>
                                                <li><i class="lni-star-filled"></i></li>
                                                <li><i class="lni-star-filled"></i></li>
                                                <li><i class="lni-star-filled"></i></li>
                                            </ul>
                                            <span class="regular-price">$59.00</span>
                                            <span class="discount-price">$69.00</span>
                                        </div>
                                    </div> <!-- single product items -->
                                </div>
                                <div class="col-md-4">
                                    <div class="single-product-items">
                                        <div class="product-item-image">
                                            <a href="#"><img src="assets/images/product/p-2.jpg" alt="Product"></a>
                                            <div class="product-discount-tag">
                                                <p>-60%</p>
                                            </div>
                                        </div>
                                        <div class="product-item-content text-center mt-30">
                                            <h5 class="product-title"><a href="#">Touchwood Chair</a></h5>
                                            <ul class="rating">
                                                <li><i class="lni-star-filled"></i></li>
                                                <li><i class="lni-star-filled"></i></li>
                                                <li><i class="lni-star-filled"></i></li>
                                                <li><i class="lni-star-filled"></i></li>
                                            </ul>
                                            <span class="regular-price">$59.00</span>
                                            <span class="discount-price">$69.00</span>
                                        </div>
                                    </div> <!-- single product items -->
                                </div>
                                <div class="col-md-4">
                                    <div class="single-product-items">
                                        <div class="product-item-image">
                                            <a href="#"><img src="assets/images/product/p-3.jpg" alt="Product"></a>
                                            <div class="product-discount-tag">
                                                <p>-60%</p>
                                            </div>
                                        </div>
                                        <div class="product-item-content text-center mt-30">
                                            <h5 class="product-title"><a href="#">Touchwood Chair</a></h5>
                                            <ul class="rating">
                                                <li><i class="lni-star-filled"></i></li>
                                                <li><i class="lni-star-filled"></i></li>
                                                <li><i class="lni-star-filled"></i></li>
                                                <li><i class="lni-star-filled"></i></li>
                                            </ul>
                                            <span class="regular-price">$59.00</span>
                                            <span class="discount-price">$69.00</span>
                                        </div>
                                    </div> <!-- single product items -->
                                </div>
                                <div class="col-md-4">
                                    <div class="single-product-items">
                                        <div class="product-item-image">
                                            <a href="#"><img src="assets/images/product/p-1.jpeg" alt="Product"></a>
                                            <div class="product-discount-tag">
                                                <p>-60%</p>
                                            </div>
                                        </div>
                                        <div class="product-item-content text-center mt-30">
                                            <h5 class="product-title"><a href="#">Touchwood Chair</a></h5>
                                            <ul class="rating">
                                                <li><i class="lni-star-filled"></i></li>
                                                <li><i class="lni-star-filled"></i></li>
                                                <li><i class="lni-star-filled"></i></li>
                                                <li><i class="lni-star-filled"></i></li>
                                            </ul>
                                            <span class="regular-price">$59.00</span>
                                            <span class="discount-price">$69.00</span>
                                        </div>
                                    </div> <!-- single product items -->
                                </div>
                                <div class="col-md-4">
                                    <div class="single-product-items">
                                        <div class="product-item-image">
                                            <a href="#"><img src="assets/images/product/p-2.jpg" alt="Product"></a>
                                            <div class="product-discount-tag">
                                                <p>-60%</p>
                                            </div>
                                        </div>
                                        <div class="product-item-content text-center mt-30">
                                            <h5 class="product-title"><a href="#">Touchwood Chair</a></h5>
                                            <ul class="rating">
                                                <li><i class="lni-star-filled"></i></li>
                                                <li><i class="lni-star-filled"></i></li>
                                                <li><i class="lni-star-filled"></i></li>
                                                <li><i class="lni-star-filled"></i></li>
                                            </ul>
                                            <span class="regular-price">$59.00</span>
                                            <span class="discount-price">$69.00</span>
                                        </div>
                                    </div> <!-- single product items -->
                                </div>
                            </div> <!-- row -->
                        </div> <!-- product items -->
                    </div> <!-- tab pane -->
                </div> <!-- tab content -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== PRODUCT PART ENDS ======-->

<!--====== SERVICES PART START ======-->

<section id="service" class="services-area pt-125 pb-130">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title pb-30">
                    <h5 class="mb-15">Our Impact Stories</h5>
                    <h3 class="title mb-15">Sir Able Over To You</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm od tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                </div> <!-- section title -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="services-left mt-45">
                    <div class="services">
                        <img src="assets/images/services/services.jpg" alt="">
                        <a href="/ourimpactstories" class="main-btn mt-30">Read More <i class="lni-chevron-right"></i></a>
                    </div> <!-- services btn -->
                </div> <!-- services left -->
            </div>
            <div class="col-lg-6">

                <div class="services-right mt-45">
                    <div class="row justify-content-center">
                        <div class="col-md-6 col-sm-8">
                            <div class="single-services text-center">
                                <div class="services-icon">
                                    <i class="lni-grid-alt"></i>
                                </div>
                                <div class="services-content mt-20">
                                    <h5 class="title mb-10">RipplePrize</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm od tempor.</p>
                                    <a href="/ourimpactstories" class="main-btn mt-30">Read More <i class="lni-chevron-right"></i></a>
                                </div>
                            </div> <!-- single services -->

                            <div class="single-services text-center mt-30">
                                <div class="services-icon">
                                    <i class="lni-ruler-pencil"></i>
                                </div>
                                <div class="services-content mt-20">
                                    <h5 class="title mb-10">RipplePrize</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm od tempor.</p>
                                    <a href="/ourimpactstories" class="main-btn mt-30">Read More <i class="lni-chevron-right"></i></a>
                                </div>
                            </div> <!-- single services -->
                        </div>
                        <div class="col-md-6 col-sm-8">
                            <div class="single-services text-center mt-30">
                                <div class="services-icon">
                                    <i class="lni-customer"></i>
                                </div>
                                <div class="services-content mt-20">
                                    <h5 class="title mb-10">RipplePrize</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm od tempor.</p>
                                    <a href="/ourimpactstories" class="main-btn mt-30">Read More <i class="lni-chevron-right"></i></a>
                                </div>
                            </div> <!-- single services -->

                            <div class="single-services text-center mt-30">
                                <div class="services-icon">
                                    <i class="lni-support"></i>
                                </div>
                                <div class="services-content mt-20">
                                    <h5 class="title mb-10">RipplePrize</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm od tempor.</p>
                                    <a href="/ourimpactstories" class="main-btn mt-30">Read More <i class="lni-chevron-right"></i></a>
                                </div>
                            </div> <!-- single services -->
                        </div>
                    </div> <!-- row -->
                </div> <!-- services right -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== SERVICES PART ENDS ======-->

<!--====== SHOWCASE PART START ======-->

<section id="showcase" class="showcase-area pt-100 pb-130">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="showcase-title pt-25">
                    <h2 class="title">Our Events Gallary ShowCase<h2>
                </div> <!-- showcase title -->
            </div>
            <div class="col-lg-6">
                <div class="showcase-title pt-25">
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo.</p>
                </div> <!-- showcase title -->
            </div>
        </div> <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="showcase-active mt-65">
                    <div class="single-showcase">
                        <img src="assets/images/showcase/3.jpg" alt="Testimonial">
                        <a href="#" class="main-btn">Full Preview</a>
                    </div> <!-- single showcase -->
                    <div class="single-showcase">
                        <img src="assets/images/showcase/2.jpg" alt="Testimonial">
                        <a href="#" class="main-btn">Full Preview</a>
                    </div> <!-- single showcase -->

                    <div class="single-showcase">
                        <img src="assets/images/showcase/3.jpg" alt="Testimonial">
                        <a href="#" class="main-btn">Full Preview</a>
                    </div> <!-- single showcase -->

                    <div class="single-showcase">
                        <img src="assets/images/showcase/4.jpg" alt="Testimonial">
                        <a href="#" class="main-btn">Full Preview</a>
                    </div> <!-- single showcase -->
                    <div class="single-showcase">
                        <img src="assets/images/showcase/5.jpeg" alt="Testimonial">
                        <a href="#" class="main-btn">Full Preview</a>
                    </div> <!-- single showcase -->
                </div> <!-- showcase active -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== SHOWCASE PART ENDS ======-->

<!--====== TEAM PART START ======-->

<section id="team" class="team-area pt-125 pb-130">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title text-center pb-25">
                    <h3 class="title mb-15">Team</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm od tempor incididunt ut labore et dolore magna aliqua.</p>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-6 col-sm-8">
                <div class="single-temp text-center mt-30">
                    <div class="team-image">
                        <img src="assets/images/services/services.jpg" alt="Team">
                    </div>
                    <div class="team-content mt-30">
                        <h4 class="title mb-10"><a href="#">Abel Onyekachi Uchegbulam</a></h4>
                        <span>Founder/CEO</span>
                        <ul class="social mt-15">
                            <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                            <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                            <li><a href="#"><i class="lni-instagram"></i></a></li>
                        </ul>
                    </div>
                </div> <!-- single temp -->
            </div>
            <div class="col-lg-3 col-md-6 col-sm-8">
                <div class="single-temp text-center mt-30">
                    <div class="team-image">
                        <img src="assets/images/team/austin.jpg" alt="Team">
                    </div>
                    <div class="team-content mt-30">
                        <h4 class="title mb-10"><a href="#">Amadi Austin </a></h4>
                        <span>Software Engineer</span>
                        <ul class="social mt-15">
                            <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                            <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                            <li><a href="#"><i class="lni-instagram"></i></a></li>
                        </ul>
                    </div>
                </div> <!-- single temp -->
            </div>
            <div class="col-lg-3 col-md-6 col-sm-8">
                <div class="single-temp text-center mt-30">
                    <div class="team-image">
                        <img src="assets/images/team/t-3.jpg"
                         alt="Team">
                    </div>
                    <div class="team-content mt-30">
                        <h4 class="title mb-10"><a href="#">Dike Paschal</a></h4>
                        <span>Software Engineer</span>
                        <ul class="social mt-15">
                            <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                            <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                            <li><a href="#"><i class="lni-instagram"></i></a></li>
                        </ul>
                    </div>
                </div> <!-- single temp -->
            </div>
            <div class="col-lg-3 col-md-6 col-sm-8">
                <div class="single-temp text-center mt-30">
                    <div class="team-image">
                        <img src="assets/images/team/t-4.jpg"
                         alt="Team">
                    </div>
                    <div class="team-content mt-30">
                        <h4 class="title mb-10"><a href="#">Abel Onyekachi Uchegbulam</a></h4>
                        <span>Marketing Manager</span>
                        <ul class="social mt-15">
                            <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                            <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                            <li><a href="#"><i class="lni-instagram"></i></a></li>
                        </ul>
                    </div>
                </div> <!-- single temp -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== TEAM PART ENDS ======-->





<!--======  BLOG PART START ======-->

<section id="blog" class="blog-area pt-125">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title text-center pb-25">
                    <h3 class="title mb-15">From The Blog</h3>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                </div> <!-- section title -->
            </div>
        </div> 
        @if(count($posts) > 0)<!-- row -->
        <div class="row justify-content-center">

        @foreach ($posts as $key => $post)
            <div class="col-lg-4 col-md-6">
                <div class="single-blog mt-30">
                    <div class="blog-image">
                        <img src="{{$post->photo ? $post->photo->file : '/images/placeholder_blog.png'}}" alt="Blog">
                    </div>
                    <div class="blog-content">
                        <div class="content">
                            <h4 class="title"><a href="#">{{ str_limit($post->title,70) }}</a></h4>
                            <span>{{ $post->created_at ? $post->created_at->toFormattedDateString() : 'Date Unavailable' }}</span>
                        </div>
                        <div class="meta d-flex justify-content-between align-items-center">
                            <div class="meta-admin d-flex align-items-center">
                                <div class="image">
                                    <a href="#"><img src="assets/images/blog/admin.jpg" alt="Admin"></a>
                                </div>
                                <div class="admin-title">
                                    <h6 class="title"><a href="#">By {{ $post->user_id ? $post->user->name : 'Anonymous' }}</a></h6>
                                </div>
                            </div>  <!-- meta admin -->
                            <div class="meta-icon">
                                <ul>
                                    <li><a class="primary-button" href="{{ route('blogposts.show',$post->slug) }}" >Read More</a></li>
                                   
                                </ul>
                            </div> <!-- meta icon -->
                        </div> <!-- meta -->
                    </div>
                </div> <!-- single blog -->
            </div>
            @endforeach
			<!-- Pagination -->
			<div class="row">
				<div class="col">
					<div class="d-flex align-items-center justify-content-center"> {{ $posts->links() }}</div>
				</div>
			</div>
			@else
			<div class="NoDataMessage">
				<h2><b>No Posts to Show!!</b></h2>
			</div>
			@endif
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--======  BLOG PART ENDS ======-->


@endsection
