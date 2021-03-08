@extends('layouts.sidebar')
@section('pageContent')

<div class="container">
    <a href="/mentors" class="btn btn-danger">Back</a>
    <hr>
<div class="row">
    
    <div class="col-lg-4">
        <img src="{{ url('public/mentors/'. $mentor->image)}}" style="height:15rem;" class="card-img-top" alt="No Image">
    </div>
    
    <div class="col-md-8">
        <div class="card">
            <h5 class="card-header">
                <b>{{$mentor->name}}'s Detail</b>
                <a href="/editMentor/{{$mentor->id}}" style="float:right;" class="btn btn-default">Edit</a>
            </h5>
            <div class="card-body">
                    <table class="table table-striped table-hover">
                            <tr>
                                <th>Name  </th>
                                <td>{{$mentor->name}}</td>
                            </tr>
                            <tr>
                                <th>Email  </th>
                                <td>{{$mentor->email}}</td>
                            </tr>
                            <tr>
                                <th>Nationality</th>
                                <td>{{$mentor->nationality}}</td>
                            </tr>
                            <tr>
                                <th>Linkedin Handle  </th>
                                <td>{{$mentor->linkedin}}</td>
                            </tr>
                            <tr>
                                <th>Twitter Handle  </th>
                                <td>{{$mentor->twitter}}</td>
                            </tr>
                            <tr>
                                <th>Facebook  </th>
                                <td>{{$mentor->facebook}}</td>
                            </tr>
                            <tr>
                                <th>Contact  </th>
                                <td>{{$mentor->contact}}</td>
                            </tr>
                            <tr>
                                <th>Field Area </th>
                                <td>An expert in {{$mentor->category}}</td>
                            </tr>
                            <tr>
                                <th>Created At : </th>
                                @if ($mentor->created_at == null)
                                <td>{{$mentor->created_at}}</td>
                                @else
                                <td>{{$mentor->created_at->diffForHumans()}}</td>
                                @endif
                            </tr>
                                
                    </table>
            </div>
        </div>
    </div>
  
</div>

<div class="row">
    <div class="col-lg-8">
        <h2>Mini Bio</h2>
            <p>{{$mentor->profile_bio}}</p>
    </div>
</div>
</div>
@endsection