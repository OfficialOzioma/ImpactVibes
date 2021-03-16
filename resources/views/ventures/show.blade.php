@extends('layouts.userDashboard')

@section('content')
<br>
@include('ventures.menu')
<br>
<div class="container">
    <div class="bg-dark text-white m-3 p-3">
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <tbody>
                    <tr>
                        <td><strong>Business Name</strong> </td>
                        <td>{{$getventure->startup_name}}</td>
                    </tr>
                    <tr>
                        <td><strong>Venture Type</strong> </td>
                        <td>{{$getventure->venture_type}}</td>
                    </tr>
                    <tr>
                        <td style="width: 50%"><strong>About the Business</strong> </td>
                        <td>{{$getventure->about_startup}}</td>
                    </tr>
                    <tr>
                        <td><strong>City</strong> </td>
                        <td>{{$getventure->city}}</td>
                    </tr>
                    <tr>
                        <td><strong>State</strong> </td>
                        <td>{{$getventure->state}}</td>
                    </tr>
                    <tr>
                        <td><strong>Country</strong> </td>
                        <td>{{$getventure->country}}</td>
                    </tr>
                    <tr>
                        <td><strong>Webiste</strong> </td>
                        <td>{{$getventure->Website}}</td>
                    </tr>
                    <tr>
                        <td><strong >Linkedin Profile</strong> </td>
                        <td>{{$getventure->linkedIn_profile}}</td>
                    </tr>
                    <tr>
                        <td><strong>Facebook Profile</strong> </td>
                        <td>{{$getventure->facebook_profile}}</td>
                    </tr><tr>
                        <td><strong>Twitter Profile</strong> </td>
                        <td>{{$getventure->twitter_profile}}</td>
                    </tr><tr>
                        <td><strong>Other Online Profile</strong> </td>
                        <td>{{$getventure->other_profile}}</td>
                    </tr>
                    <tr>
                        <td><strong>Picture of the Business</strong> </td>
                        <td> <img src="{{asset('ventures_images/'.$getventure->picture_of_the_startup)}}" alt="Image" style="width: 100%; height:100%;"></td>
                    </tr>
                    <tr>
                        <td><strong>Address</strong> </td>
                        <td>{{$getventure->address}}</td>
                    </tr><tr>
                        <td><strong>Industries</strong> </td>
                        <td>{{$getventure->industries}}</td>
                    </tr><tr>
                        <td><strong>Total invested cash</strong> </td>
                        <td>{{$getventure->total_invested_cash}}</td>
                    </tr><tr>
                        <td><strong>Making Revenue</strong> </td>
                        <td>{{$getventure->making_revenue}}</td>
                    </tr><tr>
                        <td><strong>Venture Stage</strong> </td>
                        <td>{{$getventure->venture_stage}}</td>
                    </tr><tr>
                        <td><strong>Founder Name</strong> </td>
                        <td>{{$getventure->founder_name}}</td>
                    </tr>
                    <tr>
                        <td><strong>Founder Phone Number</strong> </td>
                        <td>{{$getventure->founder_phone_number}}</td>
                    </tr>
                    <tr>
                        <td><strong>Founder Email Address</strong> </td>
                        <td>{{$getventure->founder_email_address}}</td>
                    </tr><tr>
                        <td><strong>Team member name</strong> </td>
                        <td>{{$getventure->team_member_name}}</td>
                    </tr><tr>
                        <td><strong>Team member designation</strong> </td>
                        <td>{{$getventure->team_member_designation}}</td>
                    </tr>
                    <tr>
                        <td><strong>Team member phone number</strong> </td>
                        <td>{{$getventure->team_member_phone_number}}</td>
                    </tr>
                </tbody>
            </table>

        </div>
        <div class="row">
            <div class="col-6">
                <a href="{{$getventure->id }}/edit" class=" btn btn-primary p-2 w-100"> <strong><i class="fas fa-edit"></i> Edit Record</strong> </a>
            </div>
            <div class="col-6">
                <form action="/ventures/{{$getventure->id }}" method="post">
                    {{ method_field('DELETE') }}
                    @csrf
                    <button type="submit" class="btn btn-danger p-2 w-100">
                        <strong><i class="fas fa-trash"></i> Delete Record</strong>
                    </button>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection
