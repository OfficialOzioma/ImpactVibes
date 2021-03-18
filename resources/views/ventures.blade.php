@extends('layouts.landing')

@section('content')

<br><br><br><br><br>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12 col-md-8">
            <div class="section-title pb-30">
                <h3 class="title mb-15">Impact Ventures</h3>
                <p style="text-align: center;">
                    We are passionate. We are smart.  We seek possible awe – inspiring ways to connecting 
                    YOU to the world’s best investment deals ever.<br>
                    Just help us know what your Venture does.                          
                </p>
            </div> <!-- section title -->
        </div>
    </div>
  
    <div class="row justify-content-center">     
        @foreach ($ventures as $venture)
        <div class="col-lg-6 col-md-12">
            <div class="single-product-items">
              <div class="product-item-image">
              @if ($venture->picture_of_the_startup == null)
              <img style="height: 25rem;" alt="" src="{{ asset('images/avatar.png' ) }}">
              @else 
              <a href="/venturesdeal/{{$venture->id}}"><img style="height: 25rem;" src="{{asset('ventures_images/'.$venture->picture_of_the_startup)}}" alt="Venture"></a>
             @endif   
              </div>
              <div class="product-item-content text-center mt-30">
                  <h5 class="product-title"><a href="/venturesdeal/{{$venture->id}}">{{$venture->startup_name}}</a></h5>
                  <h6 class="product-title">{{$venture->about_startup}}</h6>
                  <h6 class="product-title">{{$venture->created_at->diffForHumans()}}</h6>
                  
              </div>
                
            </div> <!-- single product items -->
        </div>
            @endforeach 
    </div>

</div>

@endsection
