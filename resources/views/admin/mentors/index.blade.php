@extends('layouts.sidebar') 
@section('pageContent')

<div class="col-lg-12 col-md-12">
    <div class="row">
        @if(count($mentors) > 0) 
        @foreach($mentors as $key => $mentor)
        <div class="card" style="width: 15rem; heigth: 15rem; float:left; margin:15px">
            <a href="/showMentor/{{$mentor->id}}"><img src="{{ url('mentor_images/'. $mentor->image)}}" style="height:5rem;" class="card-img-top" alt="No Image"></a>
            <div class="card-body" style="background: black; color:#ffffff">
            <p class="card-text" style="font-size:10px; height:1.0rem; "><strong>Email: {{$mentor->name}}
            </p>
            </div>
        </div>
        @endforeach
    </div>

    @else
    <div class="NoDataMessage">
        <h2><b>No mentors to Show!!</b></h2>
    </div>
    @endif
    <div class="row">
        <div class="col">
            <div class="d-flex align-items-center justify-content-center">
                <a href="/createMentor" class="btn btn-danger">Create Mentors</a>
            </div>
        </div>
    </div>

</div>

@endsection

