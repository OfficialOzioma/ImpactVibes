@extends('layouts.landing')

@section('content')

<br><br><br><br><br><br><br><br>

<div class="container">
    <div class="row">
        @foreach ($ventures as $venture)
            <div class="col-3 mt-1">
                <div class="card border-danger shadow-2 mb-3">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                    <img src="{{asset('ventures_images/'.$venture->picture_of_the_startup)}}" class="img-fluid"/>
                    {{-- <a href="#!">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                    </a> --}}
                    </div>
                    <div class="card-body">
                    <h5 class="card-title">{{$venture->startup_name}}</h5>
                    <hr>
                    <p class="card-text">
                        {{$venture->about_startup}}
                    </p>
                    <hr>
                    <a href="/venturesdeal/{{$venture->id}}" class="btn btn-primary">View Details</a>
                    </div>
                    <div class="card-footer text-muted  border-danger">{{$venture->created_at->diffForHumans()}}</div>
                </div>
            </div>
        @endforeach

    </div>
</div>

@endsection
