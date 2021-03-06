@extends('layouts.userDashboard')

@section('style')
<link rel="stylesheet" href="{{ asset('assets/css/venturesForm.css') }} ">
@endsection


@section('content')
<br><br><br>
<br><br><br>
@include('ventures.menu')
 <div class="m-3">
    <div class="">
        <form action="/ventures/{{$venturesRecord->id}}" method="post"  enctype="multipart/form-data">
            {{ method_field('PATCH') }}
            @csrf
            <div class="page-wrapper bg-dark p-t-100 p-b-50">
                <div class="wrapper wrapper--w900">
                    <div class="card card-6 p-3">
                        <div class="card-heading">
                            <h2 class="title">Add Start-up details</h2>
                        </div>
                        <div class="card-body">
                                <div class="form-row">
                                    <div class="name">Startup Name</div>
                                    <div class="value">
                                        <input class="input--style-6 form-control-lg" type="text" name="startup_name" value="{{$venturesRecord->startup_name}}" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name">Venture Type</div>
                                    <div class="value">
                                        <div class="form-group">
                                            <select class="form-control form-control-lg" name="venture_type" id="venture_type">
                                                <option selected value="{{$venturesRecord->venture_type}}">{{$venturesRecord->venture_type}}</option>
                                                <option value="For Profit">For Profit</option>
                                                <option value="Nonprofit">NonProfit</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name">About Startup</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <textarea class="textarea--style-6" name="about_startup" required >{{$venturesRecord->about_startup}}</textarea>
                                        </div>
                                    </div>
                                </div>

                                        <div class="form-row">
                                            <div class="name">City</div>
                                            <div class="value">
                                                <input class="input--style-6 form-control-lg" type="text" name="city" value="{{$venturesRecord->city}}" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="name">State</div>
                                            <div class="value">
                                                <input class="input--style-6 form-control-lg" type="text" name="state" value="{{$venturesRecord->state}}" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="name">Country</div>
                                            <div class="value">
                                                <input class="input--style-6 form-control-lg" type="text" name="country" value="{{$venturesRecord->country}}" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="name">Website (www)</div>
                                            <div class="value">
                                                <input class="input--style-6 form-control-lg" type="text" name="Website" value="{{$venturesRecord->Website}}" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="name">LinkedIn Profile</div>
                                            <div class="value">
                                                <input class="input--style-6 form-control-lg" type="text" name="linkedIn_profile" value="{{$venturesRecord->linkedIn_profile}}" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="name">Facebook Profile</div>
                                            <div class="value">
                                                <input class="input--style-6 form-control-lg" type="text" name="facebook_profile" value="{{$venturesRecord->facebook_profile}}" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="name">Twitter Profile</div>
                                            <div class="value">
                                                <input class="input--style-6 form-control-lg" type="text" name="twitter_profile" value="{{$venturesRecord->twitter_profile}}" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="name">Other Profile</div>
                                            <div class="value">
                                                <input class="input--style-6 form-control-lg" type="text" name="other_profile" value="{{$venturesRecord->other_profile}}" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="name">Address</div>
                                            <div class="value">
                                                <div class="input-group">
                                                    <textarea class="textarea--style-6" name="address" required>{{$venturesRecord->address}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="name">Industries</div>
                                            <div class="value">
                                                <div class="input-group">
                                                    <textarea class="textarea--style-6" name="industries" >{{$venturesRecord->industries}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="name">Total Cash Invested (in your local currency)</div>
                                            <div class="value">
                                                <input class="input--style-6 form-control-lg" type="text" name="total_invested_cash" value="{{$venturesRecord->total_invested_cash}}" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="name">Are you Already making revenue</div>
                                            <div class="value">
                                                <div class="form-group">
                                                    <select class="form-control form-control-lg" name="making_revenue" id="making_revenue" required>
                                                        <option selected value="{{$venturesRecord->making_revenue}}">{{$venturesRecord->making_revenue}}</option>
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="name">What stage startup</div>
                                            <div class="value">
                                                <div class="form-group">
                                                    <select class="form-control form-control-lg" name="venture_stage" id="venture_stage" >
                                                        <option selected  value="{{$venturesRecord->venture_stage}}">{{$venturesRecord->venture_stage}}</option>
                                                        <option value="Idea">Idea</option>
                                                        <option value="MVP">MVP</option>
                                                        <option value="MVP Validated">MVP Validated</option>
                                                        <option value="Growth">Growth</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="name">Founder's Name</div>
                                            <div class="value">
                                                <input class="input--style-6 form-control-lg" type="text" name="founder_name" value="{{$venturesRecord->founder_name}}" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="name">Founder Phone Number</div>
                                            <div class="value">
                                                <input class="input--style-6 form-control-lg" type="text" name="founder_phone_number" value="{{$venturesRecord->founder_phone_number}}" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="name">Founder Email Address</div>
                                            <div class="value">
                                                <div class="input-group">
                                                    <input class="input--style-6" type="email" name="founder_email" value="{{$venturesRecord->founder_email_address}}" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="name">Name of other member</div>
                                            <div class="value">
                                                <input class="input--style-6 form-control-lg" type="text" name="team_member_name" value="{{$venturesRecord->team_member_name}}" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="name">Role of the Team Member</div>
                                            <div class="value">
                                                <input class="input--style-6 form-control-lg" type="text" name="team_member_designation" value="{{$venturesRecord->team_member_designation}}" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="name">Phone number  of other team member</div>
                                            <div class="value">
                                                <input class="input--style-6 form-control-lg" type="text" name="team_member_phone_number" value="{{$venturesRecord->team_member_phone_number}}" required>
                                            </div>
                                        </div>

                                </div>
                                <div class="card-footer">
                                    <button class="btn btn--radius-2 btn-dark" type="submit">Update Record</button>
                                    <a href="#" class="btn btn--radius-2 btn-dark float-right" type="submit">Update your startup Image/logo</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

@endsection

@section('script')
    <script src="{{ asset('assets/js/ventureForm.js') }}"></script>
@endsection
