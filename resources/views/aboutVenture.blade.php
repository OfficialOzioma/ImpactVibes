@extends('layouts.landing')
@section('content')
<br><br><br><br><br><br><br>
<div class="container">

    <div class="row">
        <div class="col-xl-12 col-md-12">
            <div class="single_blog">
                <div><a class="btn btn-danger" href="/ventureDeals">Back</a></div>
                <div class="blog_meta" style="text-align: center">
                    <h3>{{$venture->name}}</h3>
                <p><strong style="text-transform: uppercase; color: red;">{{$venture->deal}}</strong><br> {{$venture->description}}</p>
                </div>
            </div>
        </div>  
    </div>

    <div class="row">
        @foreach ($ventImages as $ventImage)
            <div class="col-xl-4 col-md-6" style="margin-top: 15px;">
                <div class="single_blog">
                    <div class="blog_thumb">
                        <img src="{{ url('public/venture/'. $ventImage)}}">
                    </div> 
                </div>
            </div>
        @endforeach
    </div>
    

    <div class="row">
            <div class="col-xl-12 col-md-12" style="margin-top: 15px;">
                <div class="single_blog">
                    <div class="blog_thumb">
                        <img src="{{ url('public/venture/'. $venture->image)}}">
                    </div> 
                </div>
            </div>
    </div>

</div>


@endsection
