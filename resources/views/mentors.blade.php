@extends('layouts.landing')

@section('content')
<br><br><br><br><br>
    {{-- <div class="col-lg-12 col-md-12" id="mentorContainer">
        <div class="row" id="mentorRow">
  
              @if(count($mentors) > 0) 
              @foreach($mentors as $key => $mentor)
                <div class="col-lg-3" id="mentorProfile">
                    <figure id="figure" class="left marg_right"><img id="mentor_img" src="{{ url('public/mentors'. $mentor->image)}}" alt=""></figure>
                    <div class="text-body">
                      <p><strong class="color2">{{$mentor->name}}</p>
                      <p>{{$mentor->category}} </p>
                      <p><a href="/profile/{{$mentor->id}}" id="profileButton" class="btn btn-danger">View Profile</a></p>
                    </div>
                </div>
               @endforeach
               @endif
        
        </div>
      </section>
    </div> --}}

<div class="container">
  <div class="row">
    <!-- Single News Area -->
    @if(count($mentors) > 0) 
    @foreach($mentors as $mentor)
    <div class="col-lg-4 col-sm-6">
        <div class="single-blog-post style-2 mb-5">
            <!-- Blog Thumbnail -->
            <div class="blog-thumbnail">
                <a href="/profile/{{$mentor->id}}"><img src="{{ url('public/mentors/'. $mentor->image)}}" alt=""></a>
            </div>

            <!-- Blog Content -->
            <div class="blog-content">
                <p class="post-title">{{$mentor->name}}</p>
                <p class="post-date">(Mentor)</p>
                <p class="post-date">{{$mentor->category}}</p>
                <p class="post-date">{{$mentor->nationality}}</p>
                <a href="#" class="post-author">{{$mentor->linkedin}}</a>
            </div>
        </div>
    </div>
    @endforeach
    @endif

  </div>       
</div>                   
                       
@endsection