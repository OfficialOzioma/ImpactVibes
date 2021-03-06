@extends('layouts.landing')

@section('content')
<!--====== SERVICES PART START ======-->
<br><br><br><br><br><br><br><br>

<div class="container">
    <div class="row">

        <div class="col-lg-8 col-sm-6">
            <div class="intro-news-tab">
                <div class="section-title pb-30">
                    <h5 class="mb-15">Our Impact Opportunities</h5>
                    <h3 class="title mb-15">Sir Able Over To You</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm od tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                </div> <!-- section title -->
        
                <div class="services">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus quasi eius ut voluptatum et
                        soluta veritatis illum fugit ab tempore, nesciunt repellat doloribus, quos in? Possimus iusto expedita nisi unde!
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti earum explicabo sapiente optio distinctio eveniet porro sequi ea quos voluptatem asperiores nulla deleniti libero error,
                    ullam quia placeat dolore eaque. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, autem. Blanditiis impedit deserunt iure vel tenetur laboriosam omnis 
                    repudiandae ipsum sed! Porro molestias cum expedita saepe amet sequi odit quaerat!</p>
                </div> <!-- services btn -->
            </div>
        </div>

        <div class="col-lg-4 col-sm-6">
            @foreach($opportunities as $opportunity)
            <div class="sidebar-area">
                <div class="single-widget-area add-widget mb-30">
                    
                    <h5 class="mt-30">{{$opportunity->description}}</h5>
                    <h4>{{$opportunity->title}}</h4>
                    <a href="{{$opportunity->link}}">
                        <img src="{{('/public/opportunities/' . $opportunity->image)}}" alt="">
                    </a>
                </div>
            </div>
            @endforeach
        </div>

        </div> 
    </div> 
@endsection