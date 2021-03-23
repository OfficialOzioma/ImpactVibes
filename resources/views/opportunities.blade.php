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
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <form action="/submit_opportunity" method="GET">
                            <button type="submit" class="btn btn-info">Submit Opportunity</button>
                        </form>
                    </div>
                </div>
            </div> <!-- section title -->
            <form action="/opportunity_search" method="GET" class="navbar-form">
                <input class="form-control" name="search" placeholder="Search for Opportunities" type="text" style="display: inline-block; width: 70%;">
                  <button type="submit" class="btn btn-info">Search</button>
            </form>
        </div>
    </div>
<br>
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
        <div class="col-lg-4 col-md-6">
            <div class="single-product-items">
              <div class="product-item-image">
                @if ($opportunity->image == null)
                <a href="/opportunity/{{$opportunity->id}}"><img style="height: 15rem;" alt="" src="{{ asset('images/avatar.png' ) }}"></a>
                @else 
                <a href="/opportunity/{{$opportunity->id}}"><img style="height: 15rem;" src="{{ url('opportunity_images/'. $opportunity->image)}}" alt="Opportunity"></a>
                @endif   
              </div>
              <div class="product-item-content text-center mt-30">
                  <h4 class="product-title"><a href="/opportunity/{{$opportunity->id}}">{{$opportunity->title}}</a></h4>
                  <h6 class="product-title">{{$opportunity->category}}</h6>
                  <h6 class="product-title">{{$opportunity->funded}} funded</h6>
                <span class="regular-price">{{$opportunity->remaining_days}} days left</span>                
              </div>
                
            </div> <!-- single product items -->
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