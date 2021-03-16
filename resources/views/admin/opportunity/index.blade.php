@extends('layouts.sidebar') 
@section('pageContent')

<div class="col-lg-12 col-md-12">
    <div class="row">
        @if(count($opportunities) > 0) 
        @foreach($opportunities as $opportunity)
        <div class="card" style="width: 10rem; float:left; margin:15px">
            <a href="/showOpportunity/{{$opportunity->id}}"><img src="{{ url('opportunity_images/'. $opportunity->image)}}" style="height:5rem;" class="card-img-top" alt="No Image"></a>
            <div class="card-body" style="background: black; color:#ffffff">
                <p class="card-text" style="font-size:10px; height:1.0rem; "><strong>Title: {{$opportunity->title}}</p>
            </div>
        </div>
        @endforeach
    </div>

    @else
    <div class="NoDataMessage">
        <h2><b>No Opportunity To Show!!</b></h2>
    </div>
    @endif
    <div class="row">
        <div class="col">
            <div class="d-flex align-items-center justify-content-center">
                <a href="/createOpportunity" class="btn btn-danger">Create Opportunity</a>
            </div>
        </div>
    </div>

</div>

@endsection

