@extends('layouts.landing')

@section('content')

<!--====== SERVICES PART START ======-->
<br><br><br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12 col-md-8">
            <div class="section-title pb-30">
                <h3 class="title mb-15">Impact Opportunities</h3>
                <p style="text-align: center;">
                    Greatness is your potential and Action, your opportunity.  Let’s explore and find 
                    the power to succeed together!                         
                </p>
            </div> <!-- section title -->
        </div>
    </div>

    @if(Session::has('opportunity_deleted'))
    <div class="alert alert-dismissible alert-success fade show">
      {{ session('opportunity_deleted')}}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif

    @if(count($opportunities) > 0)
    <div class="row justify-content-center">
        @foreach ($opportunities as $key => $opportunity)
        <div class="col-lg-3 col-sm-4">
            <div class="single-services text-center mt-30" style="background: #ec5252">
                <div class="image">
                    @if ($opportunity->image == null)
                    <img style="height: 5rem; width: 5rem;" alt="" src="{{ asset('images/avatar.png' ) }}">
                    @else 
                   <img style="height: 5rem; width: 5rem;" src="{{ url('opportunity_images/'. $opportunity->image)}}" alt="Opportunity">
                    @endif
                </div>
                <div class="services-content mt-20">
                    <h5 class="title mb-10" style="color: #000000">{{$opportunity->title}}</h5>
                    <p style="color: #ffffff; font-size: 13px;">{{$opportunity->description}}</p>
                    <a style="color: #0e0d0d; font-size: 15px;" href="{{$opportunity->link}}">More...</a><br>
                </div>
            </div> <!-- single services -->
        </div>
        @endforeach
    </div> <!-- row -->
    @else
    <div class="row justify-content-center">
        <div class="NoDataMessage">
            <h2><b>No available Opportunity!!</b></h2>
        </div>
    @endif 
</div> <!-- container -->
@endsection