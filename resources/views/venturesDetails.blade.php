@extends('layouts.landing')

@section('content')
<br><br><br><br><br><br><br><br>
<div class="container">
    <div class="bg-dark text-white m-3 p-3">
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered text-white" style="width:100%">
                <tbody>
                    <tr>
                        <td><strong>Business Name</strong> </td>
                        <td>{{$venturesDetails->startup_name}}</td>
                    </tr>
                    <tr>
                        <td><strong>Venture Type</strong> </td>
                        <td>{{$venturesDetails->venture_type}}</td>
                    </tr>
                    <tr>
                        <td style="width: 50%"><strong>About the Business</strong> </td>
                        <td>{{$venturesDetails->about_startup}}</td>
                    </tr>
                    <tr>
                        <td><strong>City</strong> </td>
                        <td>{{$venturesDetails->city}}</td>
                    </tr>
                    <tr>
                        <td><strong>State</strong> </td>
                        <td>{{$venturesDetails->state}}</td>
                    </tr>
                    <tr>
                        <td><strong>Country</strong> </td>
                        <td>{{$venturesDetails->country}}</td>
                    </tr>
                    <tr>
                        <td><strong>Webiste</strong> </td>
                        <td>{{$venturesDetails->Website}}</td>
                    </tr>
                    <tr>
                        <td><strong >Linkedin Profile</strong> </td>
                        <td>{{$venturesDetails->linkedIn_profile}}</td>
                    </tr>
                    <tr>
                        <td><strong>Facebook Profile</strong> </td>
                        <td>{{$venturesDetails->facebook_profile}}</td>
                    </tr><tr>
                        <td><strong>Twitter Profile</strong> </td>
                        <td>{{$venturesDetails->twitter_profile}}</td>
                    </tr><tr>
                        <td><strong>Other Online Profile</strong> </td>
                        <td>{{$venturesDetails->other_profile}}</td>
                    </tr>
                    <tr>
                        <td><strong>Picture of the Business</strong> </td>
                        <td> <img src="{{asset('ventures_images/'.$venturesDetails->picture_of_the_startup)}}" alt="Image" style="width: 100%; height:100%;"></td>
                    </tr>
                    <tr>
                        <td><strong>Address</strong> </td>
                        <td>{{$venturesDetails->address}}</td>
                    </tr><tr>
                        <td><strong>Industries</strong> </td>
                        <td>{{$venturesDetails->industries}}</td>
                    </tr><tr>
                        <td><strong>Total invested cash</strong> </td>
                        <td>{{$venturesDetails->total_invested_cash}}</td>
                    </tr><tr>
                        <td><strong>Making Revenue</strong> </td>
                        <td>{{$venturesDetails->making_revenue}}</td>
                    </tr><tr>
                        <td><strong>Venture Stage</strong> </td>
                        <td>{{$venturesDetails->venture_stage}}</td>
                    </tr><tr>
                        <td><strong>Founder Name</strong> </td>
                        <td>{{$venturesDetails->founder_name}}</td>
                    </tr>
                    <tr>
                        <td><strong>Founder Phone Number</strong> </td>
                        <td>{{$venturesDetails->founder_phone_number}}</td>
                    </tr>
                    <tr>
                        <td><strong>Founder Email Address</strong> </td>
                        <td>{{$venturesDetails->founder_email_address}}</td>
                    </tr><tr>
                        <td><strong>Team member name</strong> </td>
                        <td>{{$venturesDetails->team_member_name}}</td>
                    </tr><tr>
                        <td><strong>Team member designation</strong> </td>
                        <td>{{$venturesDetails->team_member_designation}}</td>
                    </tr>
                    <tr>
                        <td><strong>Team member phone number</strong> </td>
                        <td>{{$venturesDetails->team_member_phone_number}}</td>
                    </tr>
                    <tr>
                        <td><strong>Status</strong> </td>
                        <td>{{$venturesDetails->status}}</td>
                    </tr>
                </tbody>
            </table>

        </div>

    </div>

</div>
@endsection
