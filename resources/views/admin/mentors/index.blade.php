@extends('layouts.sidebar') 
    @section('pageContent')

<div class="col-md-12">
    @if(count($mentors) > 0) 
    <div class="row">
        @foreach($mentors as $key => $mentor)
        <div class="card" style="width: 12rem;" >
        <img src="{{ asset('assets/images/blog/b-5.jpg')}}" class="card-img-top" alt="No Image">
        <div class="card-body">
            <h5 class="card-title">{{$mentor->name}}</h5>
            <p class="card-text">{{$mentor->email}}</p>
            <a href="/showMentor/{{$mentor->id}}" class="btn btn-primary">Details</a>
        </div>
        </div>
        @endforeach
    </div>
    <div class="row">
        <div class="col">
            <div class="d-flex align-items-center justify-content-center">
                <a href="/createMentor" class="btn btn-danger">Create Mentors</a>
            </div>
        </div>
    </div>
        
    <!-- Pagination links -->
    <!-- Pagination -->
    <div class="row">
        <div class="col">
            <div class="d-flex align-items-center justify-content-center"> {{ $mentors->links() }}</div>
        </div>
    </div>
    @else
    <div class="NoDataMessage">
        <h2><b>No mentors to Show!!</b></h2>
    </div>
    @endif
</div>

@endsection