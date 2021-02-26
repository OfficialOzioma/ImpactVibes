@extends('layouts.sidebar') @section('pageContent')
@include('layouts.tinyeditor')

<h2>Edit Mentor</h2>
<hr />
<button
    type="button"

    class="btn btn-dark"
>
    Go Back
</button>
<hr />

<div class="row">
    <div class="col-md-4">
    <form action="/updateMentor/{{$mentor->id}}" class="tm-edit-product-form" method="Post" enctype="multipart/form-data">
                            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Mentor Name</label>
                <input
                required
                    name="name"
                    value="{{$mentor->name}}"
                    type="text"
                    class="form-control"
                    placeholder="Enter name"
                />
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input
                required
                name="email"
                value="{{$mentor->email}}"
                    type="email"
                    class="form-control"
                    placeholder="Enter email"
                />
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">WhatsNumber</label>
                <input
                required
                name="contact"
                value="{{$mentor->contact}}"
                    type="text"
                    class="form-control"
                    placeholder="Contact Number"
                />
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">LinkedIn Profile Url</label>
                <input
                required
                name="linkedin"
                value="{{$mentor->linkedin}}"
                    type="text"
                    class="form-control"
                    placeholder="Contact Number"
                />
            </div>


            <div class="form-group">
                <label for="exampleInputPassword1">Facebook Profile Url</label>
                <input
                required
                name="facebook"
                value="{{$mentor->facebook}}"
                    type="text"
                    class="form-control"
                    placeholder="Contact Number"
                />
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Twitter Profile Url</label>
                <input
                required
                name="twitter"
                value="{{$mentor->twitter}}"
                    type="text"
                    class="form-control"
                    placeholder="Contact Number"
                />
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1"
                    >Category Of Mentorship</label
                >
                <select class="custom-select" name="category">
                    <option selected>{{$mentor->category}}</option>
                    <option value="Agriculture">Agriculture</option>
                    <option value="ArtificialIntelligence">Artificial Intelligence</option>
                    <option value="Entertainment">Entertainment</option>
                    <option value="Entrepreneurship">Entrepreneurship</option>
                    <option value="Tourism">Tourism </option>
                    <option value="WasteManagement">Waste Management</option>
                    <option value="PeaceBuilding">Peace Building</option>
                    <option value="CorporateManagement">Corporate Management</option>
                    <option value="InformationTechnology">Information Technology</option>
                    <option value="HealthCare">HealthCare</option>
                    <option value="CyberSecurity">Cyber Security</option>
                    <option value="CivicLeadership">Civic Leadership</option>
                    <option value="ComputerArts">Computer Arts</option>
                    <option value="SocialWork">Social Work</option>
                    <option value="Employment">Employment</option>
                    <option value="WomenEmpowerment">Women’s Empowerment</option>
                    <option value="Journalism">Journalism</option>
                    <option value="E–Commerce">E – Commerce</option>
                    <option value="Media">Media</option>
                    <option value="Sales">Sales</option>
                    <option value="Sports">Sports</option>
                    <option value="FinTech">FinTech</option>
                    <option value="BusinessAdvisory">Business Advisory</option>
                    <option value="YouthDevelopment">Youth Development</option>
                    <option value="Finance">Finance</option>
                    <option value="ITInfrastructure">IT Infrastructure</option>
                    <option value="BusinessManagement">Business Management</option>
                    <option value="SoftwareDevelopment">Software Development</option>
                    <option value="Education">Education</option>
                    <option value="UI/UX-Designs">UI/UX Designs</option>
                    <option value="Fashion">Fashion</option>
                    <option value="Sales-CustomerService">Sales/Customer Service</option>
                    <option value="ProductDesign">Product Design</option>
                    <option value="STEMEducation">STEM Education</option>
                    <option value="Multimedia">Multimedia</option>
                    <option value="BusinessDevelopment&Strategy">Business Development & Strategy</option>
                    <option value="Growth Hack">Growth Hack</option>
                    <option value="ProjectManagement">Project Management</option>
                    <option value="StrategicPlanning">Strategic Planning</option>
                    <option value="AgriTech-BusinessOptimization">AgriTech/Business Optimization</option>
                    <option value="CreativeWriting">Creative Writing</option>
                    <option value="LegalStrategy/Advisory">Legal Strategy/Advisory</option>
                    <option value="RenewableEnergy">Renewable Energy</option>
                    <option value="DigitalMarketing">Digital Marketing</option>
                    <option value="SocialInclusion">Social Inclusion</option>
                    <option value="Data Analysis">Data Analysis</option>
                    <option value="Growth Hack">Growth Hack</option>
                    <option value="Marketing">Marketing</option>
                    <option value="CustomerServiceRelations">Customer Service & Relations</option>
                    <option value="SocialEntrepreneurship">Social Entrepreneurship</option>
                   
                </select>
            </div>

           

            <div class="form-group">
                <label for="exampleInputPassword1">Choose Photo</label>
            <input name="image" type="file" value="{{$mentor->image}}" class="form-control"/>
            </div>

            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>
   


</div>


<div class="row">




</div>

@include('layouts.messages') @endsection
