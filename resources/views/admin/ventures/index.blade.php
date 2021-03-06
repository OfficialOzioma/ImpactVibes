@extends('layouts.sidebar') 
@section('pageContent')
<div class="container" id="ventureContainer">
<h1>Ventures Deal</h1>

<div class="row" id="ventureRow">
    @if(count($venturesDeals) > 0) 
    @foreach($venturesDeals as $key => $venturesDeal)
    <div class="col-lg-4 col-md-6" id="venture">
        <h1>
            <a href="/showVenture/{{$venturesDeal->id}}">{{$venturesDeal->name}}</a>
        </h1>
        <p class="card-text"><strong>{{$venturesDeal->deal}} </strong><br>
            {{$venturesDeal->description}}
        </p>  
    </div>
    @endforeach
</div>
    @else
<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="d-flex align-items-center justify-content-center">
            <h2><b>No Ventures Deals To Show!!</b></h2>
        </div>
    </div>
</div>
    @endif
    <div class="row" id="ventureButton">
        <div class="col-lg-12 col-md-12">
            <div class="d-flex align-items-center justify-content-center">
                <a href="/createVentures" class="btn btn-danger">Add Ventures</a>
            </div>
        </div>
    </div>

</div>
@endsection

