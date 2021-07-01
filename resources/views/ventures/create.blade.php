@extends('layouts.userDashboard')

@section('style')
<link rel="stylesheet" href="{{ asset('assets/css/venturesForm.css') }} ">
@endsection

@section('content')
<br>
    <div class="container">
        @include('ventures.menu')
        <div class="m-3">
            <div class="">
                <form action="{{route('ventures.store')}}" method="post"  enctype="multipart/form-data">
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
                                                <input class="input--style-6 form-control-lg" type="text" name="startup_name" placeholder="What is the Name of your startup" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="name">Venture Type</div>
                                            <div class="value">
                                                <div class="form-group">
                                                    <select class="form-control form-control-lg" name="venture_type" id="venture_type" >
                                                        <option selected disabled>Select the Venture type</option>
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
                                                    <textarea class="textarea--style-6" name="about_startup" placeholder="Briefly tell us about your Venture (1,000 Characters Max.)" required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="name">Upload Picture or Logo of the startup</div>
                                            <div class="value">
                                                <label for="formFileLg" class="form-label">Select Picture of the Startup</label>
                                                <input type="file" class="form-control form-control-lg" id="formFileLg" name="picture_of_the_startup" required />
                                                <div class="label--desc">Upload your startup picture/logo or any other picture. Max file size 50 MB</div>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="name">City</div>
                                            <div class="value">
                                                <input class="input--style-6 form-control-lg" type="text" name="city" placeholder="What City is your startup Located" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="name">State</div>
                                            <div class="value">
                                                <input class="input--style-6 form-control-lg" type="text" name="state" placeholder="What State is your startup Located" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="name">Country</div>
                                            <div class="value">
                                                <input class="input--style-6 form-control-lg" type="text" name="country" placeholder="What Country is your startup Located" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="name">Website (www)</div>
                                            <div class="value">
                                                <input class="input--style-6 form-control-lg" type="text" name="Website" placeholder="What is the website of your startup. Skip if none.">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="name">LinkedIn Profile</div>
                                            <div class="value">
                                                <input class="input--style-6 form-control-lg" type="text" name="linkedIn_profile" placeholder="Link to your startup Linkedin Page. If any.">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="name">Facebook Profile</div>
                                            <div class="value">
                                                <input class="input--style-6 form-control-lg" type="text" name="facebook_profile" placeholder="Link to your Startup Facebook page. If any.">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="name">Twitter Profile</div>
                                            <div class="value">
                                                <input class="input--style-6 form-control-lg" type="text" name="twitter_profile" placeholder="Link to your Startup twitter handle. If any.">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="name">Other Profile</div>
                                            <div class="value">
                                                <input class="input--style-6 form-control-lg" type="text" name="other_profile" placeholder="Link to any other social media handle. If any.">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="name">Address</div>
                                            <div class="value">
                                                <div class="input-group">
                                                    <textarea class="textarea--style-6" name="address" placeholder="Address of the Startup" required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="name">Industries</div>
                                            <div class="value">
                                                <input class="input--style-6 form-control-lg" type="text" name="industries" placeholder="Which industry does your startup belong eg. techology, banking, agriculture." required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="name">Total Cash Invested (in your local currency)</div>
                                            <div class="value">
                                                <input class="input--style-6 form-control-lg" type="text" name="total_invested_cash" placeholder="What is the Total cash invested in your startup">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="name">Are you Already making revenue</div>
                                            <div class="value">
                                                <div class="form-group">
                                                    <select class="form-control form-control-lg" name="making_revenue" id="making_revenue" required>
                                                        <option selected disabled>Startup making profit ?</option>
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
                                                    <select class="form-control form-control-lg" name="venture_stage" id="venture_stage" required>
                                                        <option selected disabled>What stage is your startup ?</option>
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
                                                <input class="input--style-6 form-control-lg" type="text" name="founder_name" placeholder="What is the name of the founder of your startup" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="name">Founder Phone Number</div>
                                            <div class="value">
                                                <input class="input--style-6 form-control-lg" type="text" name="founder_phone_number" placeholder="Startup founder's phone Number" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="name">Founder Email Address</div>
                                            <div class="value">
                                                <div class="input-group">
                                                    <input class="input--style-6" type="email" name="founder_email" placeholder="example@email.com" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="name">Name of other member</div>
                                            <div class="value">
                                                <input class="input--style-6 form-control-lg" type="text" name="team_member_name" placeholder="Name of any other team member eg co-founder, CTO, CFO">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="name">Role of the Team Member</div>
                                            <div class="value">
                                                <input class="input--style-6 form-control-lg" type="text" name="team_member_designation" placeholder="What is the Designation of the team member">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="name">Phone number  of other team member</div>
                                            <div class="value">
                                                <input class="input--style-6 form-control-lg" type="text" name="team_member_phone_number" placeholder="Team member's phone Number">
                                            </div>
                                        </div>

                                </div>
                                <div class="card-footer">
                                    <button class="btn btn--radius-2 btn-dark" type="submit">Send Application</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('assets/js/ventureForm.js') }}"></script>
@endsection
