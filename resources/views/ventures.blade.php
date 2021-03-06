@extends('layouts.landing')

@section('content')

<br><br><br><br><br><br><br><br>
<div class="container">

<div class="row">
    @foreach($ventures as $venture)
    <div class="col-lg-4 col-sm-6">
        <div class="single-blog-post style-2 mb-5">
            <!-- Blog Thumbnail -->
            <div class="blog-thumbnail">
                <a href="/aboutVenture/{{ $venture->id}}"><img src="{{ url('public/venture/' . $venture->image)}}" alt="Img" height="300rem" width="300rem"></a>
            </div>

            <!-- Blog Content -->
            <div class="blog-content">
                <span class="post-date">{{$venture->deal}}</span>
                <a href="/aboutVenture/{{ $venture->id}}" class="post-title">{{$venture->description}}</a>
                <a href="/aboutVenture/{{ $venture->id}}" class="post-author">{{$venture->name}}</a>
            </div>
        </div>
    </div>
    @endforeach
</div>

</div>

@endsection
