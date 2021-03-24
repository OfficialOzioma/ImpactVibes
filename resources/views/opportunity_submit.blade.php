@extends('layouts.landing')

@section('content')
<!--====== SERVICES PART START ======-->
<br><br><br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12 col-md-8">
            <div class="section-title pb-30">
                <h3 class="title mb-15">Submit Opportunity</h3>
                <p>
                Have YOU any opportunity that you would like to share with Impact Vibes community? 
                Please kindly use this form to inform us about it. You can also mail us at contact@impactvibes.com<br>          
                By submitting ANY opportunity to us, you are agreeing to these terms. Please read them carefully.
                </p>
            </div> <!-- section title -->
            <ul>
                <li>
                    1. Information provided here is true and do not contain confidential information which would in any 
                    way harm the concerned or other organization. Authenticity, validity and reliability of information 
                    shared are also ensured and the submitter takes full responsibilities of these.
                </li><br>
                <li>
                    2. Information provided here would be shared with potential beneficiary/viewers through Website, 
                    Social Media and other means of communication, and
                </li><br>
                <li>
                    3. Permission to use the image uploaded for this opportunity is provided to us at Impact Vibes. In 
                    a situation where there is no image shared, we have the right to design, manipulate and use appropriate 
                    images pertaining to this opportunity.
                </li><br>
            </ul>
            <p><b>Thank You.</b></p>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-12 col-md-8">
            <div class="contact-form">
                <form id="contact-form" action="/submit_opportunity" method="post" data-toggle="validator"  enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="single-form form-group">
                                <input type="text" name="name" placeholder="Enter Your Name" data-error="Name is required." required="required">
                                <div class="help-block with-errors"></div>
                            </div> <!-- single form -->
                        </div>
                        <div class="col-lg-6">
                            <div class="single-form form-group">
                                <input type="email" name="email" placeholder="Enter Your Email"  data-error="Valid email is required." required="required">
                                <div class="help-block with-errors"></div>
                            </div> <!-- single form -->
                        </div>
                        <div class="col-lg-6">
                            <div class="single-form form-group">
                                <input type="text" name="title" placeholder="Title of the opportunity" required="required">
                                <div class="help-block with-errors"></div>
                            </div> <!-- single form -->
                        </div>
                        <div class="col-lg-6">
                            <div class="single-form form-group">
                                <input type="text" name="organizer_name" placeholder="Enter the name of the organizer or Organization" required="required">
                                <div class="help-block with-errors"></div>
                            </div> <!-- single form -->
                        </div>
                        <div class="col-lg-6">
                            <div class="single-form form-group">
                                <select class="form-control form-control-lg" name="category" required="required">
                                    <option selected disabled>Select Category</option>
                                    <option value="Scholarships">Scholarships</option>
                                    <option value="Competitions">Competitions</option>
                                    <option value="Awards">Awards</option>
                                    <option value="Jobs">Jobs</option>
                                    <option value="Grants">Grants</option>
                                    <option value="Conferences">Conferences</option>
                                    <option value="Internships">Internships</option>
                                    <option value="Workshops">Workshops</option>
                                    <option value="Seminars">Seminars</option>
                                    <option value="Others">Others</option>
                                </select>
                                <div class="help-block with-errors"></div>
                            </div> <!-- single form -->
                        </div>
                        <div class="col-lg-6">
                            <div class="single-form form-group">
                                <select class="form-control form-control-lg" name="eligible_region" required="required">
                                    <option selected disabled>Select Eligible Region</option>
                                    <option value="Africa">Africa</option>
                                    <option value="America">America</option>
                                    <option value="Europe">Europe</option>
                                    <option value="Asia">Asia</option>
                                    <option value="Australia">Australia</option>
                                </select>
                                <div class="help-block with-errors"></div>
                            </div> <!-- single form -->
                        </div>
                        <div class="col-lg-6">
                            <div class="single-form form-group">
                                <select class="form-control form-control-lg" name="funded" required="required">
                                    <option selected disabled>Is it funded ?</option>
                                    <option value="Partially">Partially</option>
                                    <option value="Fully">Fully</option>
                                    <option value="None">None</option>
                                </select>
                                <div class="help-block with-errors"></div>
                            </div> <!-- single form -->
                        </div>
                        <div class="col-lg-6">
                            <div class="single-form form-group">
                                <input type="date" name="end_date" placeholder="Deadline date" required="required">
                                <div class="help-block with-errors"></div>
                            </div> <!-- single form -->
                        </div>
                        <div class="col-lg-12">
                            <div class="single-form form-group">
                                <textarea name="description" placeholder="Describe what the opportunity is about, the eligibility requirements and the link on how to apply" data-error="Please Describe the opportunity with the link" required="required"></textarea>
                                <div class="help-block with-errors"></div>
                            </div> <!-- single form -->
                        </div>
                        <div class="col-lg-12">
                            <div class="single-form form-group">
                                <div class="value">
                                    <label for="formFileLg" class="form-label">Select image</label>
                                    <input type="file" class="form-control form-control-lg" id="formFileLg" name="image" required />
                                    <div class="label--desc">Upload the opportunity image or image flyer. Max file size 3 MB</div>
                                </div>
                            </div> <!-- single form -->
                        </div>
                        <p class="form-message"></p>
                        <div class="col-lg-12">
                            <div class="single-form form-group">
                                <button class="main-btn" type="submit">Send</button>
                            </div> <!-- single form -->
                        </div>
                    </div> <!-- row -->
                </form>
            </div> <!-- row -->
        </div>
    </div>

</div> <!-- container -->
@endsection