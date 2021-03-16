@extends('layouts.userDashboard')
@include('layouts.tinyeditor')

@section('style')
<link rel="stylesheet" href="{{ asset('assets/css/venturesForm.css') }} ">
@endsection

@section('content')
<br>
    <div class="container">
        <div class="m-3">
            <div class="">
                <form action="/createMentor" method="post"  enctype="multipart/form-data">
                    @csrf
                    <div class="page-wrapper bg-dark p-t-100 p-b-50">
                        <div class="wrapper wrapper--w900">
                            <div class="card card-6 p-3">
                                <div class="card-heading">
                                    <h2 class="title">Edit Mentor</h2>
                                </div>
                                <div class="card-body">
                                        <div class="form-row">
                                            <div class="name">Name of Mentor</div>
                                            <div class="value">
                                            <input class="input--style-6 form-control-lg" type="text" name="name" placeholder="The name of the mentor here">
                                            </div>
                                        </div>
                                    
                                        <div class="form-row">
                                            <div class="name">Email Address</div>
                                            <div class="value">
                                                <div class="value">
                                                    <input class="input--style-6 form-control-lg" type="text" name="email" placeholder="Active email address">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="name">Category Of Mentorship</div>
                                            <div class="value">
                                                <div class="form-group">
                                                    <select class="form-control form-control-lg" name="category" id="venture_type">
                                                        <option selected>Choose Category</option>
                                                        <option value="Agriculture">Agriculture</option>
                                                        <option value="Artificial Intelligence">Artificial Intelligence</option>
                                                        <option value="Entertainment">Entertainment</option>
                                                        <option value="Entrepreneurship">Entrepreneurship</option>
                                                        <option value="Tourism">Tourism </option>
                                                        <option value="Waste Management">Waste Management</option>
                                                        <option value="Peace Building">Peace Building</option>
                                                        <option value="Corporate Management">Corporate Management</option>
                                                        <option value="Information Technology">Information Technology</option>
                                                        <option value="HealthCare">HealthCare</option>
                                                        <option value="Cyber Security">Cyber Security</option>
                                                        <option value="Civic Leadership">Civic Leadership</option>
                                                        <option value="Computer Arts">Computer Arts</option>
                                                        <option value="Social Work">Social Work</option>
                                                        <option value="Employment">Employment</option>
                                                        <option value="Women Empowerment">Women’s Empowerment</option>
                                                        <option value="Journalism">Journalism</option>
                                                        <option value="E–Commerce">E – Commerce</option>
                                                        <option value="Media">Media</option>
                                                        <option value="Sales">Sales</option>
                                                        <option value="Sports">Sports</option>
                                                        <option value="FinTech">FinTech</option>
                                                        <option value="Business Advisory">Business Advisory</option>
                                                        <option value="Youth Development">Youth Development</option>
                                                        <option value="Finance">Finance</option>
                                                        <option value="IT Infrastructure">IT Infrastructure</option>
                                                        <option value="Business Management">Business Management</option>
                                                        <option value="Software Development">Software Development</option>
                                                        <option value="Education">Education</option>
                                                        <option value="UI/UX-Designs">UI/UX Designs</option>
                                                        <option value="Fashion">Fashion</option>
                                                        <option value="Sales-Customer Service">Sales/Customer Service</option>
                                                        <option value="Product Design">Product Design</option>
                                                        <option value="STEM Education">STEM Education</option>
                                                        <option value="Multimedia">Multimedia</option>
                                                        <option value="Business Development & Strategy">Business Development & Strategy</option>
                                                        <option value="Growth Hack">Growth Hack</option>
                                                        <option value="Project Management">Project Management</option>
                                                        <option value="Strategic Planning">Strategic Planning</option>
                                                        <option value="AgriTech-Business Optimization">AgriTech/Business Optimization</option>
                                                        <option value="Creative Writing">Creative Writing</option>
                                                        <option value="Legal Strategy/Advisory">Legal Strategy/Advisory</option>
                                                        <option value="Renewable Energy">Renewable Energy</option>
                                                        <option value="Digital Marketing">Digital Marketing</option>
                                                        <option value="Social Inclusion">Social Inclusion</option>
                                                        <option value="Data Analysis">Data Analysis</option>
                                                        <option value="Growth Hack">Growth Hack</option>
                                                        <option value="Marketing">Marketing</option>
                                                        <option value="Customer Service Relations">Customer Service & Relations</option>
                                                        <option value="Social Entrepreneurship">Social Entrepreneurship</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="name">Nationality</div>
                                            <div class="value">
                                                <div class="form-group">
                                                    <select class="form-control form-control-lg" name="nationality" id="venture_type">
                                                        <option selected>Select Nationality</option>
                                                        <option value="Nigeria">Nigeria</option>
                                                        <option value="Ghana">Ghana</option>
                                                        <option value="Cameroun">Cameroun</option>
                                                        <option value="Kenya">Kenya</option>
                                                        <option value="South Africa">South Africa </option>
                                                        <option value="Benin Republic">Benin Republic</option>
                                                        <option value="Togo">Togo</option>          
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="form-row">
                                            <div class="name">Phone Number</div>
                                            <div class="value">
                                                <input class="input--style-6 form-control-lg" type="integer" name="contact" placeholder="Your Whatsapp Phone Number">
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="name">Facebook</div>
                                            <div class="value">
                                                <input class="input--style-6 form-control-lg" type="text" name="facebook" placeholder="The link to your facebook account">
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="name">Twitter</div>
                                            <div class="value">
                                                <input class="input--style-6 form-control-lg" type="text" name="twitter" placeholder="The link to your twitter account">
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="name">Linked In</div>
                                            <div class="value">
                                                <input class="input--style-6 form-control-lg" type="text" name="linkedin" placeholder="The link to your linkedin account">
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="name">Upload Image</div>
                                            <div class="value">
                                                <label for="formFileLg" class="form-label">Select Picture</label>
                                                <input type="file" class="form-control form-control-lg" id="formFileLg" name="image" required />
                                                <div class="label--desc">Upload image. Max file size 5 MB</div>
                                            </div>
                                        </div>

                                <div class="card-footer">
                                    <button class="btn btn--radius-2 btn-dark" type="submit">Create Mentor</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@include('layouts.messages')
@endsection

@section('script')
    <script src="{{ asset('assets/js/ventureForm.js') }}"></script>
@endsection
