@extends('layouts.landing')

@section('content')
<br><br><br><br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12 col-md-8">
            <div class="section-title pb-30">
                <h3 class="title mb-15">Impact Blogs</h3>
                <p style="text-align: center;">
                    Your only limitation is the commitment to turn your imagination and inspiration into Impact!                         
                </p>
            </div> <!-- section title -->
        </div>
    </div>

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
            <div class="single-product-items">
              <div class="product-item-image">
              @if ($post->photo == null)
              <img style="height: 15rem;" alt="" src="{{ asset('images/avatar.png' ) }}">
              @else 
              <a href="{{ route('blogposts.show',$post->slug) }}"><img style="height: 15rem;" src="{{$post->photo ? $post->photo->file : '/images/placeholder_blog.png'}}" alt="Blog"></a>
             @endif   
              </div>
              <div class="product-item-content text-center mt-30">
                  <h4 class="product-title"><a href="{{ route('blogposts.show',$post->slug) }}">{{ str_limit($post->title,70) }}</a></h4>
                  <h6 class="product-title">By {{ $post->user_id ? $post->user->name : 'Anonymous' }}</h6>
                  <div class="image">
                    @if ($post->user->image == null)
                    <img style="height: 3rem; width: 3rem;" alt="" src="{{ asset('images/avatar.png' ) }}">
                    @else 
                    <a href="{{ route('blogposts.show',$post->slug) }}"><img style="height: 3rem; width: 3rem;" src="{{$post->user->image}}" alt="User"></a>
                    @endif
                </div>
                <span class="regular-price">{{ $post->created_at ? $post->created_at->toFormattedDateString() : 'Date Unavailable' }}</span>                
              </div>
                
            </div> <!-- single product items -->
        </div>
        @endforeach
    </div>
		<!-- Pagination -->
    <div class="row justify-content-center">
        <div class="col-lg-12 col-md-8">
            <div class="d-flex align-items-center justify-content-center"> {{ $posts->links() }}</div>
        </div>
    </div>
    @else
    <div class="row justify-content-center">
        <div class="NoDataMessage">
            <h2><b>No Posts to Show!!</b></h2>
        </div>
    @endif    
    </div> 
</div>
@endsection

