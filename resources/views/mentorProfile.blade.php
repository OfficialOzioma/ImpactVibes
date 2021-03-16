@extends('layouts.landing')

@section('content')
<br><br><br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="section-title pb-30">
                <h3 class="title mb-15">{{$mentor->name}}</h3>
            </div> <!-- section title -->
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-8" style="height: 30rem; width: 100%;">
                @if ($mentor->image == null)
                <img style="height: 25rem; width: 100%;" alt="" src="{{ asset('images/avatar.png' ) }}">
                @else 
                <img style="height: 30rem; width: 100%;" src="{{ url('storage/'. $mentor->image)}}" alt="Mentor">
               @endif 
        </div>
    </div>
<br><br>
    <div class="row justify-content-center">
        <div class="col-lg-4">
            <div class="section-title pb-30">
                <h6  style="margin: 5px;">Email: {{$mentor->email}}</h6>
                <h6 style="margin: 5px;">Sector: {{$mentor->category}}<h6>
                <h6 style="margin: 5px;">Phone Number: {{$mentor->contact}}</h6>
                <ul class="social mt-15">
                    <li><a href="{{$mentor->facebook}}"><i class="lni-facebook-filled"></i></a></li>
                    <li><a href="{{$mentor->twitter}}"><i class="lni-twitter-original"></i></a></li>
                    <li><a href="{{$mentor->instagram}}"><i class="lni-instagram"></i></a></li>
                    <li><a href="{{$mentor->linkedin}}"><i class="lni lni-linkedin-original"></i></a></li>
                </ul>
            </div> <!-- section title -->
        </div>
    </div>

</div>

<div class="row">
    <div class="col-lg-12" style="margin: 20px">
        <div><span>{{$mentor->profile_bio}}</span></div>
    </div>
</div>
@endsection
