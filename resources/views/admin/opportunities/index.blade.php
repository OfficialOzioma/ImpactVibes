@extends('layouts.sidebar') 
@section('pageContent')

<div class="container" id="ventureContainer">
    <h1>Opportunities Available</h1>
    
    <div class="row" id="ventureRow">
        @foreach($opportunities as $key => $opportunity)
        <div class="col-lg-4 col-md-6" id="venture">
            <h1>
                <a href="/showOpportunity/{{$opportunity->id}}">{{$opportunity->title}}</a>
            </h1>
            <p class="card-text"><strong>{{$opportunity->description}} </strong><br>
                {{-- <a href="{{$opportunity->link}}">{{$opportunity->link}}</a> --}}
            </p>  
        </div>
        @endforeach
    </div>

<div class="row" id="ventureButton">
    <div class="col-lg-12 col-md-12">
        <div class="d-flex align-items-center justify-content-center">
            <a href="/createOpportunity" class="btn btn-danger">Add Opportunity</a>
        </div>
    </div>
</div>

</div>
@endsection