@extends('layouts.landing')

@section('content')

<!--====== SLIDER PART START ======-->



<!--====== SLIDER PART ENDS ======-->

<!--====== DISCOUNT PRODUCT PART START ======-->
<br><br><br><br><br><br><br><br>
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

