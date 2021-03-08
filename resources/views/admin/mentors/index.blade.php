@extends('layouts.sidebar') 
@section('pageContent')

<div class="col-lg-12 col-md-12">
    <div class="row">
        @if(count($mentors) > 0) 
        @foreach($mentors as $key => $mentor)
        <div class="card" style="width: 15rem; float:left; margin:15px; height: 15rem">
            <a href="/showMentor/{{$mentor->id}}"><img src="{{ url('public/mentors/'. $mentor->image)}}" style="height:10rem;" class="card-img-top" alt="No Image"></a>
            <div class="card-body" style="background: #212029; color:#ffffff">
            <p class="card-text" style="font-size:15px; height:1.0rem; "><strong>Email: {{$mentor->email}} <br>
                {{$mentor->name}}
            </p>
            </div>
        </div>
        @endforeach
    </div>

    {{-- <div class="row">
        <div class="col">
            <div class="d-flex align-items-center justify-content-center"> {{ $mentors->links() }}</div>
        </div>
    </div> --}}
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

