<<<<<<< HEAD
@extends('layouts.sidebar') 
@section('pageContent')
<div class="container" id="ventureContainer">
<h1>Ventures Deal</h1>

<div class="row" id="ventureRow">
    @if(count($venturesDeals) > 0) 
    @foreach($venturesDeals as $key => $venturesDeal)
    <div class="col-lg-4 col-md-6" id="venture">
        <h1>
            <a href="/showVenture/{{$venturesDeal->id}}">{{$venturesDeal->name}}</a>
        </h1>
        <p class="card-text"><strong>{{$venturesDeal->deal}} </strong><br>
            {{$venturesDeal->description}}
        </p>  
    </div>
    @endforeach
</div>
    @else
<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="d-flex align-items-center justify-content-center">
            <h2><b>No Ventures Deals To Show!!</b></h2>
        </div>
    </div>
</div>
    @endif
    <div class="row" id="ventureButton">
        <div class="col-lg-12 col-md-12">
            <div class="d-flex align-items-center justify-content-center">
                <a href="/createVentures" class="btn btn-danger">Add Ventures</a>
            </div>
        </div>
    </div>

</div>
@endsection

=======
@extends('layouts.sidebar')

@section('pageContent')
@if(Session::has('Status_update'))
<div class="alert alert-dismissible alert-success fade show">
    {{ session('Status_update')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
<div class="container page-wrapper bg-dark p-3 text-white">
    <div class="table-responsive">
        <table id="example" class="table table-striped table-bordered text-white" style="width:100%">
            <thead>
                <tr>
                    <th>Startup Name</th>
                    <th>Venture Type</th>
                    <th>City</th>
                    <th>State</th>
                    <th>country</th>
                    <th>Status</th>
                    <th>View Details</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($getventures as $venture)
                <tr>
                    <td>{{$venture->startup_name}}</td>
                    <td>{{$venture->venture_type}}</td>
                    <td>{{$venture->city}}</td>
                    <td>{{$venture->state}}</td>
                    <td>{{$venture->country}}</td>
                    <td>{{$venture->status}}</td>
                    <td>
                        <a href="{{route('adminVentures.show', $venture->id)}}" class="btn btn-primary">View Details</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

@endsection
>>>>>>> 53a23f7e249a3ef310795a50cae23c68ce1cfc48
