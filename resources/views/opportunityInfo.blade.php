@extends('layouts.landing')

@section('content')
<!--====== SERVICES PART START ======-->
<br><br><br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12 col-md-8">
            <div class="section-title pb-30">
                <h3 class="title mb-15">{{$opportunity->title}}</h3>
            </div> <!-- section title -->
        </div>
    </div>

    <div class="row justify-content-center">     
        <div class="col-lg-8 col-md-6">
            <div class="single-product-items">
              <div class="product-item-image">
                @if ($opportunity->image == null)
              <img style="height: 25rem;" alt="" src="{{ asset('images/avatar.png' ) }}">
              @else 
              <img style="height: 25rem; width: 100%;" src="{{ asset('opportunity_images/'. $opportunity->image)}}" alt="Blog Image">
             @endif   
              </div>                
            </div> 
        </div>              
    </div>
<br>
<hr>
    <div class="row justify-content-center">
        <div class="col-lg-12 col-md-8">
            <div class="section-title pb-30">
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-4">
                        <span class="regular-price"><b>{{$opportunity->category}}</b></span>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <span class="regular-price"><b>{{$opportunity->funded}} Funded</b></span>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <span class="regular-price"><b>Organizers: {{$opportunity->Organizer_name}}</b></span>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <span class="regular-price"><b><a href="{{$opportunity->funded}}">Official Link</a></b></span>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <span class="regular-price"><b>Region: {{$opportunity->eligible_region}}</b></span>
                    </div>
                </div>              
            </div> <!-- section title -->           
        </div>
    </div>

    <br><br>
    <div class="row justify-content-center">     
        <div class="col-lg-12 col-md-8">
            <div class="single-product-items">
                <p>{!! $opportunity->description !!}</p>         
            </div> 
        </div>              
    </div>

</div> <!-- container -->
@endsection