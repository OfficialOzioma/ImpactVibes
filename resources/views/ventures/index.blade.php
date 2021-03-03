@extends('layouts.userDashboard')

@section('content')
<br><br><br>
<br><br><br>
@include('ventures.menu')
<br>
<br>
<div class="container page-wrapper bg-dark p-3 text-white">
    <div class="table-responsive">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
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
                @foreach ($ventureDeal as $venture)
                <tr>
                    <td>{{$venture->startup_name}}</td>
                    <td>{{$venture->venture_type}}</td>
                    <td>{{$venture->city}}</td>
                    <td>{{$venture->state}}</td>
                    <td>{{$venture->country}}</td>
                    <td>{{$venture->status}}</td>
                    <td>
                        <a href="{{route('ventures.show', $venture->id)}}" class="btn btn-primary">View Details</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

@endsection
