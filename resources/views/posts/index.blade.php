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
                                <img src="assets/images/slider/1.jpg" alt="Slider">
                                <div class="slider-discount-tag">
                                    <p>Changing the <br> World</p>
                                </div>
                            </div> <!-- slider product image -->
                        </div>
                        <div class="col-lg-8 col-md-7">
                            <div class="slider-product-content">
                                <h1 class="slider-title mb-10" data-animation="fadeInUp" data-delay="0.3s"><span>The</span> Impact <span>Circe</span></h1>
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
                                    <img src="assets/images/slider/3.jpg" alt="Slider">
                                    <div class="slider-discount-tag">
                                        <p>One Life at <br> a Time</p>
                                    </div>
                                </div> <!-- slider product image -->
                            </div>
                            <div class="col-lg-8 col-md-7">
                                <div class="slider-product-content">
                                    <h1 class="slider-title mb-10" data-animation="fadeInUp" data-delay="0.3s"><span>Impacting</span> One Life at a <span>Time</span></h1>
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
                                    <img src="assets/images/slider/2.jpg" alt="Slider">
                                    <div class="slider-discount-tag">
                                        <p>Impact<br> Circle</p>
                                    </div>
                                </div> <!-- slider product image -->
                            </div>
                            <div class="col-lg-8 col-md-7">
                                <div class="slider-product-content">
                                    <h1 class="slider-title mb-10" data-animation="fadeInUp" data-delay="0.3s"><span>We</span> are Changing the <span>Narative</span></h1>
                                    <p class="mb-25" data-animation="fadeInUp" data-delay="0.9s">One day however a small line of blind text by the name of Lorem Ipsum <br> decided to leave for the far World of Grammar.</p>
                                    <a class="main-btn" href="#contact" data-animation="fadeInUp" data-delay="1.5s">Contact Us <i class="lni-chevron-right"></i></a>
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
<div class="container">
    @if(Session::has('post_deleted'))
    <div class="alert alert-dismissible alert-success fade show">
      {{ session('post_deleted')}}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif
    @if(Session::has('post_saved'))
    <div class="alert alert-dismissible alert-success fade show">
      {{ session('post_saved')}}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif
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
            
        </div> 
</div>
@endsection

