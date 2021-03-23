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
                                    <h3 class="slider-title mb-10" data-animation="fadeInUp" data-delay="0.3s"><span>We are</span> changing the <span>narrative</span></h3>
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
                                    <h3 class="slider-title mb-10" data-animation="fadeInUp" data-delay="0.3s"><span>Brace up</span> for the  <span>Impact</span></h3>
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
                        <li><a href="https://web.facebook.com/thaimpactvibes"><i class="lni-facebook-filled"></i></a></li>
                        <li><a href="https://twitter.com/thaimpactvibes"><i class="lni-twitter-original"></i></a></li>
                        <li><a href="https://www.instagram.com/thaimpactvibes/?hl=en"><i class="lni-instagram"></i></a></li>
                        <li><a href="https://www.linkedin.com/in/impact-vibes-a89156204/"><i class="lni lni-linkedin-original"></i></a></li>
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
                        <a href="/ourimpactstories" style="color:red">Click Here<i class="lni-chevron-right"></i></a>
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
<!--====== PRODUCT PART ENDS ======-->

<!--====== SERVICES PART START ======-->

<section id="service" class="services-area pt-125 pb-130">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title pb-30">
                    <h3 class="title mb-15">Our Impact Stories</h3>
                    <h5 class="mb-15">To us, few acts of kindness can spark an Impact!</h5>
                    <p style="color: #000000">
                        It begins with empathy and passion – to bring change by solving a particular pressing problem.
                        Owerri, Nigeria is our home, but - a lot has to be done to address its neglect and falsity over 
                        the years to inspire and enable human capital development among the youths, as obtainable elsewhere.
                        “Social Innovation is the way to bring humanity back on track”.
                        Yes, and should be prized and not orphaned! <br><br>
                        Hence, our Founder/CEO Abel had the burden to start up our parent -  Impact Circle Enterprise in August 
                        2018 as a Social platform to lead and bridge the gap in raising  young potentials within and around, with 
                        disruptive abilities to launch SMEs/startups and sustainable impacts in diverse career paths.<br><br>
                        With a few strategic partners and projects, we’ve done our little in inspiring many talented youths and 
                        teens from the grassroots, explored knowledge with them, converted opportunities, and NOW empowering 
                        Be our next Partner towards Impact! <br><br>
                        Thanks so kindly.
                        </p>
                </div> <!-- section title -->
            </div>

            <div class="col-lg-6">

                <div class="services-right mt-30">

                    <div class="row justify-content-center">

                        <div class="col-lg-6 col-sm-8">
                            <div class="single-services text-center mt-30">
                                <div class="services-icon">
                                    <i class="lni-grid-alt"></i>
                                </div>
                                <div class="services-content mt-20">
                                    <h5 class="title mb-10">Impact Circle</h5>
                                    <p style="color: #ffffff">
                                    Our focus lies on inspiring the youths, breeding employability through 
                                    the acquisition of diverse valuable work skills...
                                    </p>
                                    <a href="/ourimpactstories">Read More</a><br>
                                    <ul class="social mt-15">
                                        <li><a href="https://web.facebook.com/thaimpactcircle/"><i class="lni-facebook-filled"></i></a></li>
                                        <li><a href="https://twitter.com/thaimpactcircle"><i class="lni-twitter-original"></i></a></li>
                                        <li><a href="https://www.instagram.com/thaimpactcircle/"><i class="lni-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div> <!-- single services -->
                        </div>
                        <div class="col-lg-6 col-sm-8">
                            <div class="single-services text-center mt-30">
                                <div class="services-icon">
                                    <i class="lni-ruler-pencil"></i>
                                </div>
                                <div class="services-content mt-20">
                                    <h5 class="title mb-10">Ripple Prize</h5>
                                    <p style="color: #ffffff">
                                    To us, few acts of kindness can spark an 
                                    Impact, and Social Innovation is the way to bring humanity 
                                    back on track...
                                    </p>
                                    <a href="/ourimpactstories">Read More</a><br>
                                    <ul class="social mt-15">
                                        <li><a href="https://web.facebook.com/ripplesprize/"><i class="lni-facebook-filled"></i></a></li>
                                        <li><a href="https://twitter.com/ripplesprize"><i class="lni-twitter-original"></i></a></li>
                                        <li><a href="https://www.instagram.com/ripplesprize/?hl=en"><i class="lni-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div> <!-- single services -->
                        </div>
                        <div class="col-lg-6 col-sm-8" style="height: 12rem;">
                            <div class="single-services text-center mt-30">
                                <div class="services-icon">
                                    <i class="lni-customer"></i>
                                </div>
                                <div class="services-content mt-20">
                                    <h5 class="title mb-10">HultPrize@IMSU</h5>
                                    <p style="color: #ffffff">
                                        A UN/Hult Prize partnered OnCampus program or competition hosted in 2018 to launch a new wave of 
                                        student entrepreneurs in Imo State University...
                                    </p>
                                    <a href="/ourimpactstories">Read More</a><br>
                                    <ul class="social mt-15">
                                        <li><a href="https://web.facebook.com/pg/hultprizeatimsu/"><i class="lni-facebook-filled"></i></a></li>
                                        <li><a href="https://twitter.com/hultprizeatimsu?lang=en"><i class="lni-twitter-original"></i></a></li>
                                        <li><a href="https://www.instagram.com/hultprizeatimsu/?hl=en"><i class="lni-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div> <!-- single services -->
                        </div>
                        <div class="col-lg-6 col-sm-8">
                            <div class="single-services text-center mt-30">
                                <div class="services-icon">
                                    <i class="lni-support"></i>
                                </div>
                                <div class="services-content mt-20">
                                    <h5 class="title mb-10">IYS@IMSU</h5>
                                    <p style="color: #ffffff">
                                    We are leading Sustainable Development Goals through the dignity of the person and 
                                    creating 'positive change'...
                                    </p>
                                    <a href="/ourimpactstories">Read More</a><br>
                                    <ul class="social mt-15">
                                        {{-- <li><a href="#"><i class="lni-facebook-filled"></i></a></li> --}}
                                        <li><a href="https://twitter.com/iysatimsu"><i class="lni-twitter-original"></i></a></li>
                                        <li><a href="https://www.instagram.com/iysatimsu/"><i class="lni-instagram"></i></a></li>
                                    </ul>
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
            <div class="col-lg-12">
                <div class="showcase-title pt-25">
                    <h2 class="title">Our Events Gallery ShowCase<h2>
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
                        <img src="assets/images/showcase/8.jpg" alt="Testimonial">
                        <a href="#" class="main-btn">Full Preview</a>
                    </div> <!-- single showcase -->

                    <div class="single-showcase">
                        <img src="assets/images/showcase/6.jpg" alt="Testimonial">
                        <a href="#" class="main-btn">Full Preview</a>
                    </div> <!-- single showcase -->

                    <div class="single-showcase">
                        <img src="assets/images/showcase/3.jpg" alt="Testimonial">
                        <a href="#" class="main-btn">Full Preview</a>
                    </div> <!-- single showcase -->

                    <div class="single-showcase">
                        <img src="assets/images/showcase/10.jpg" alt="Testimonial">
                        <a href="#" class="main-btn">Full Preview</a>
                    </div> <!-- single showcase -->

                    <div class="single-showcase">
                        <img src="assets/images/showcase/4.jpg" alt="Testimonial">
                        <a href="#" class="main-btn">Full Preview</a>
                    </div> <!-- single showcase -->

                    <div class="single-showcase">
                        <img src="assets/images/showcase/7.jpg" alt="Testimonial">
                        <a href="#" class="main-btn">Full Preview</a>
                    </div> <!-- single showcase -->

                    <div class="single-showcase">
                        <img src="assets/images/showcase/9.jpg" alt="Testimonial">
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
            <div class="col-lg-12 col-sm-8">
                <div class="section-title text-center pb-25">
                    <h3 class="title mb-15">MEET THE TEAM</h3>
                    <p style="color: #000000">We’re a team of growing changemakers knitted together to impact through diligence, 
                    ingenuity and passion, in creating values, building prosperity and sharing in your many 
                    accomplishments.
                    </p>
                </div> <!-- section title -->
            </div>
        </div> <!-- row -->
        <div class="row justify-content-center">
            <div class="col-lg-12 col-sm-8">

                <div class="services-right mt-30">

                    <div class="row justify-content-center">

                        <div class="col-lg-3 col-sm-4">
                            <div class="single-services text-center mt-30" style="height: 25rem; width: 20rem; background: #ffff">
                                <div class="team-image">
                                    <img style="height: 12rem;" src="{{asset('images/sirAbel.jpg')}}" alt="Team">
                                </div>
                                <div class="services-content mt-20">
                                    <h5 class="title mb-10">Abel Onyekachi Uchegbulam</h5>
                                    <p>Founder/CEO</p>
                                    <br>
                                    <ul class="social mt-15">
                                        <li><a href="https://web.facebook.com/abeldadiamond.uchegbulam"><i class="lni-facebook-filled"></i></a></li>
                                        <li><a href="https://twitter.com/IamsimplyAbel"><i class="lni-twitter-original"></i></a></li>
                                        <li><a href="https://www.instagram.com/iamsimplyabel"><i class="lni-instagram"></i></a></li>
                                        <li><a href="https://www.linkedin.com/in/abel-onyekachi-uchegbulam-497215a9/"><i class="lni lni-linkedin-original"></i></a></li>
                                    </ul>
                                </div>
                            </div> <!-- single services -->
                        </div>
                        <div class="col-lg-3 col-sm-4">
                            <div class="single-services text-center mt-30" style="height: 25rem; width: 20rem; background: #ffff">
                                <div class="team-image">
                                    <img style="height: 12rem;" src="{{asset('images/Lopo.jpg')}}" alt="Team">
                                </div>
                                <div class="services-content mt-20">
                                    <h5 class="title mb-10">Amadi Austin</h5>
                                    <p>Software Engineer</p>
                                    <br>
                                    <ul class="social mt-15">
                                        <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                        <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                                        <li><a href="#"><i class="lni-instagram"></i></a></li>
                                        <li><a href="https://www.linkedin.com/in/abel-onyekachi-uchegbulam-497215a9/"><i class="lni lni-linkedin-original"></i></a></li>
                                    </ul>
                                </div>
                            </div> <!-- single services -->
                        </div>
                        <div class="col-lg-3 col-sm-4">
                            <div class="single-services text-center mt-30" style="height: 25rem; width: 20rem; background: #ffff">
                                <div class="team-image">
                                    <img style="height: 12rem;" src="{{asset('images/Ozioma2.jpg')}}" alt="Team">
                                </div>
                                <div class="services-content mt-20">
                                    <h5 class="title mb-10">Dike Paschal</h5>
                                    <p>Software Engineer</p>
                                    <br>
                                    <ul class="social mt-15">
                                        <li><a href="https://web.facebook.com/dikep2"><i class="lni-facebook-filled"></i></a></li>
                                        <li><a href="https://twitter.com/officialozioma"><i class="lni-twitter-original"></i></a></li>
                                        <li><a href="https://www.instagram.com/officialozioma/"><i class="lni-instagram"></i></a></li>
                                        <li><a href="https://www.linkedin.com/in/oficialozioma"><i class="lni lni-linkedin-original"></i></a></li>
                                    </ul>
                                </div>
                            </div> <!-- single services -->
                        </div>
                        <div class="col-lg-3 col-sm-4">
                            <div class="single-services text-center mt-30" style="height: 25rem; width: 20rem; background: #ffff">
                                <div class="team-image">
                                    <img style="height: 12rem;" src="{{asset('images/Emma3.jpg')}}" alt="Team">
                                </div>
                                <div class="services-content mt-20">
                                    <h5 class="title mb-10">Emmanuel C Mbagwu</h5>
                                    <p>Software Engineer</p>
                                    <br>
                                    <ul class="social mt-15">
                                        <li><a href="https://web.facebook.com/lilstex.emmanuel.5"><i class="lni-facebook-filled"></i></a></li>
                                        <li><a href="https://twitter.com/lilstex4good"><i class="lni-twitter-original"></i></a></li>
                                        <li><a href="https://www.instagram.com/lilstex/"><i class="lni-instagram"></i></a></li>
                                        <li><a href="https://www.linkedin.com/in/lilstex-emmanuel"><i class="lni lni-linkedin-original"></i></a></li>
                                    </ul>
                                </div>
                            </div> <!-- single services -->
                        </div>
                    </div> <!-- row -->
                </div> <!-- services right -->
            </div>

            
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== TEAM PART ENDS ======-->

<!--======  BLOG PART START ======-->

<section id="blog" class="blog-area pt-125">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-sm-8">
                <div class="section-title text-center pb-25">
                    <h3 class="title mb-15">From Impact Blog</h3>
                    <p>Your only limitation is the commitment to turn your imagination and inspiration into Impact!
                    </p>
                </div> <!-- section title -->
            </div>
        </div> 
        @if(count($posts) > 0)<!-- row -->
        <div class="row justify-content-center">

        @foreach ($posts as $key => $post)
            <div class="col-lg-4 col-md-6">
                <div class="single-blog mt-30"  style="height: 25rem;">
                    <div class="blog-image">
                        <img style="height: 14rem;" src="{{$post->photo ? $post->photo->file : '/images/placeholder_blog.png'}}" alt="Blog">
                    </div>
                    <div class="blog-content">
                        <div class="content">
                            <h4 class="title"><a href="{{ route('blogposts.show',$post->slug) }}">{{ str_limit($post->title,70) }}</a></h4>
                            <span>{{ $post->created_at ? $post->created_at->toFormattedDateString() : 'Date Unavailable' }}</span>
                        </div>
                        <div class="meta d-flex justify-content-between align-items-center">
                            <div class="meta-admin d-flex align-items-center">
                                <div class="image">
                                    <a href="{{ route('blogposts.show',$post->slug) }}"><img style="height: 3rem; width: 3rem;" src="{{$post->photo ? $post->photo->file : '/images/placeholder_blog.png'}}" alt="Admin"></a>
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
