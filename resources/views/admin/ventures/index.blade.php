@extends('layouts.sidebar')

@section('pageContent')
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
                    <td>Approved</td>
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
