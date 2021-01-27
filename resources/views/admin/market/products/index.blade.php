@extends('layouts.sidebar')

@section('pageContent')
    @include('admin.market.index')

    <div class="row">
        <div class="col-sm-6 mt-3">
          <div class="card">
            <div class="card-img">
                <img class="card-img-top" src="https://media.wired.com/photos/5f401ecca25385db776c0c46/master/pass/Gear-How-to-Apple-ios-13-home-screen-iphone-xs-06032019_big_large_2x.jpg" alt="Card image cap" >
            </div>
            <div class="card-body">
                <h5 class="card-title text-capitalize">
                    <strong>iPhone 8 Mobile Phone </strong>
                    <span class=" float-right"><strong>$400</strong></span>
                </h5>
              <hr>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-primary">See this Product</a>
            </div>
          </div>
        </div>

@endsection
