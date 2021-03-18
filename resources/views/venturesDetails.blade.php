@extends('layouts.landing')

@section('content')
<br><br><br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="section-title pb-30">
                <h3 class="title mb-15">{{$venturesDetails->startup_name}}</h3>
            </div> <!-- section title -->
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="section-title pb-30">
                @if ($venturesDetails->picture_of_the_startup == null)
                <img style="height: 30rem; width: 100%;" alt="" src="{{ asset('images/avatar.png' ) }}">
                @else 
                <img style="height: 30rem; width: 100%;" src="{{asset('ventures_images/'.$venturesDetails->picture_of_the_startup)}}" alt="Venture">
               @endif 
            </div> <!-- section title -->
        </div>

        <div class="col-lg-3">
            <div class="section-title pb-30">
                <h6 style="font-size: 20px; margin-bottom: 5px;" class="title mb-15">Venture Type: <p> {{$venturesDetails->venture_type}}</p></h6>      
                <h6 style="font-size: 20px; margin-bottom: 5px;" class="title mb-15">City: <p> {{$venturesDetails->city}}</p></h6>
                <h6 style="font-size: 20px; margin-bottom: 5px;" class="title mb-15">State: <p> {{$venturesDetails->state}}</p></h6>
                <h6 style="font-size: 20px; margin-bottom: 5px;" class="title mb-15">Country: <p> {{$venturesDetails->country}}</p></h6>
                <h6 style="font-size: 20px; margin-bottom: 5px;" class="title mb-15">Website <p>:{{$venturesDetails->Website}}</p></h6>
                <h6 style="font-size: 20px; margin-bottom: 5px;" class="title mb-15">Address: <p> {{$venturesDetails->address}}</p></h6>
                <h6 style="font-size: 20px; margin-bottom: 5px;" class="title mb-15">Industry: <p> {{$venturesDetails->industries}}</p></h6>
                <h6 style="font-size: 20px; margin-bottom: 5px;" class="title mb-15">Stage: <p> {{$venturesDetails->venture_stage}}</p></h6>
            </div>
        </div>
        <div class="col-lg-3"> 
            <div class="section-title pb-30"> 
                <h6 style="font-size: 20px; margin-bottom: 5px;" class="title mb-15">Founder Name: <p> {{$venturesDetails->founder_name}}</p></h6>
                <h6 style="font-size: 20px; margin-bottom: 5px;" class="title mb-15">Founder Phone Number: <p> {{$venturesDetails->founder_phone_number}}</p></h6>
                <h6 style="font-size: 20px; margin-bottom: 5px;" class="title mb-15">Founder Email: <p> {{$venturesDetails->founder_email_address}}</p></h6>
                <h6 style="font-size: 20px; margin-bottom: 5px;" class="title mb-15">Team Member: <p> {{$venturesDetails->team_member_name}}}</p></h6>
                <h6 style="font-size: 20px; margin-bottom: 5px;" class="title mb-15">Team Designation: <p> {{$venturesDetails->team_member_designation}}</p></h6>
                <h6 style="font-size: 20px; margin-bottom: 5px;" class="title mb-15">Team Phone Number: <p> {{$venturesDetails->team_member_phone_number}}</p></h6>
                <h6 style="font-size: 20px; margin-bottom: 5px;" class="title mb-15">Status: <p> {{$venturesDetails->status}}</p></h6>
                <ul class="social mt-15">
                    <li><a href="{{$venturesDetails->facebook_profile}}"><i class="lni-facebook-filled"></i></a></li>
                    <li><a href="{{$venturesDetails->twitter_profile}}"><i class="lni-twitter-original"></i></a></li>
                    <li><a href="{{$venturesDetails->other_profile}}"><i class="lni-instagram"></i></a></li>
                    <li><a href="{{$venturesDetails->linkedIn_profile}}"><i class="lni lni-linkedin-original"></i></a></li>
                </ul>
            </div> <!-- section title -->
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="section-title pb-30">
                <h6 style="margin: 5px; font-size: 22px;" class="title mb-15">About <p> {{$venturesDetails->about_startup}}</p></h6>
            </div> <!-- section title -->
        </div>
    </div>

</div>
     
@endsection
