@extends('layouts.sidebar')
@section('pageContent')

<hr>
<div class="row">
    
    
    <div class="col-md-10">
        <div class="card">
            <h5 class="card-header"><b>{{$mentor->name}}'s Information</b></h5>
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
@endsection