@extends('layouts.landing')

@section('content')
<br><br><br><br><br>
<div class="container">
  <div class="row justify-content-center">
      <div class="col-lg-12 col-md-8">
          <div class="section-title pb-30">
              <h3 class="title mb-15">Connect With Mentors</h3>
              <p style="text-align: center;">
                Are you seemingly out of place? You think?
                Need a leap from ho – hum to pro?
                Here’s a Safe Space!
                With hundreds of years combined wealth of experience from a blend of global mentors, 
                connect! Impact is just made easy and simple.       
              </p>
          </div> <!-- section title -->
      </div>
  </div>

  <div class="row justify-content-center">     
    @if(count($mentors) > 0) 
        @foreach($mentors as $key => $mentor)
    <div class="col-lg-4 col-md-6">
        <div class="single-product-items" style="width: 15rem;">
          <div class="product-item-image">
          @if ($mentor->image == null)
          <img style="height: 14rem; width: 10rem;" alt="" src="{{ asset('images/avatar.png' ) }}">
          @else 
          <a href="/profile/{{$mentor->id}}"><img style="height: 12rem; width: 14rem;" src="{{ url('mentor_images/'. $mentor->image)}}" alt="Mentor"></a>
         @endif   
          </div>
          <div class="product-item-content text-center mt-30">
              <h5 class="product-title"><a href="/profile/{{$mentor->id}}">{{$mentor->name}}</a></h5>
              <h6 class="product-title">{{$mentor->nationality}}</h6>
              <h6 class="product-title">{{$mentor->category}}</h6>
              <span class="regular-price">Mentor</span>
              <a href="https://www.linkedin.com/in/impact-vibes-a89156204/"><i class="lni lni-linkedin-original"></i></a>
          </div>
            
        </div> <!-- single product items -->
    </div>
        @endforeach
    @endif   
</div>


</div>
 
@endsection