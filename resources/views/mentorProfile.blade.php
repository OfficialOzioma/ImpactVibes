@extends('layouts.landing')

@section('content')
<br><br><br><br><br><br>

<div class="row">
    <div class="col-lg-4 col-sm-6" style="margin: 20px;">
        {{-- <div class="container" style="width:100%;"> --}}
            <img id="profile_img" src="{{ url('public/mentors/'. $mentor->image)}}" alt="NoImage" style="border: 2px solid black">
        {{-- </div> --}}
    </div>    
    <div class="col-lg-6 col-sm-6" style="margin: 20px;">
        <div class="card" style="background: sandybrown">
            <h5 class="card-header" style="color: blue;">
                <b><strong>{{$mentor->name}}'s Profile</strong></b>
            </h5>
            <div class="card-body">
                    <table class="table table-striped table-hover">
                            <tr>
                                <th>Name  </th>
                                <td>{{$mentor->name}}</td>
                            </tr>
                            <tr>
                                <th>Email Address </th>
                                <td>{{$mentor->email}}</td>
                            </tr>
                            <tr>
                                <th>Linkedin Handle  </th>
                                <td><a href="{{$mentor->linkedin}}"><i class="lni-twitter-original"></i></a></td>
                            </tr>
                            <tr>
                                <th>Twitter Handle  </th>
                                <td><a href="{{$mentor->twitter}}"><i class="lni-twitter-original"></i></a></td>
                            </tr>
                            <tr>
                                <th>Facebook  </th>
                                <td><a href="{{$mentor->facebook}}"><i class="lni-facebook-filled"></i></a></td>
                            </tr>
                            <tr>
                                <th>Contact  </th>
                                <td>{{$mentor->contact}}</td>
                            </tr>
                            <tr>
                                <th>Field Area </th>
                                <td>An expert in {{$mentor->category}}</td>
                            </tr>
                                
                    </table>
            </div>
        </div>
    </div>
   
</div>

<div class="row">
    <div class="col-lg-12" style="margin: 20px">
        <div><span>{{$mentor->profile_bio}}</span></div>
    </div>
</div>
@endsection
