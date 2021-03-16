@extends('layouts.sidebar')
@section('pageContent')

<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card">
            <h5 class="card-header">
                <b>{{$mentor->name}}'s Information</b>
                <a href="/editMentor/{{$mentor->id}}" style="float:right;" class="btn btn-default">Edit</a>
            </h5>
            <div class="card-body">
                    <table class="table table-striped table-hover">
                            <tr>
                                <th>Name of Mentor </th>
                                <td>{{$mentor->name}}</td>
                            </tr>
                            <tr>
                                <th>Email  </th>
                                <td>{{$mentor->email}}</td>
                            </tr>
                            <tr>
                                <th>Nationality  </th>
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
                                <th>Phone Number  </th>
                                <td>{{$mentor->contact}}</td>
                            </tr>
                            <tr>
                                <th>Sector </th>
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
@endsection