@extends('layouts.landing')

@section('content')
<br><br><br><br><br><br><br><br>

<div class="row">
    <div class="col-md-2">
        <div class="container" style="height:15rem; width:15rem;">
        <img id="profile_img" src="{{ url('storage/'. $mentor->image)}}" alt="NoImage" style="border: 2px solid black">
        </div>
    </div>    
    <div class="col-md-8">
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

@endsection
