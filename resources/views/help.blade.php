@extends('layouts.landing')

@section('content')
<!--====== CONTACT PART START ======-->
<section id="contact" class="contact-area pt-115">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title pb-30">
                    <h3 class="title mb-15">Help Center</h3>
                </div> <!-- Help title -->
            </div>
        </div> <!-- row -->
        <div class="contact-box mt-70">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-info pt-25">
                        <ul>
                            <li>
                                <div class="single-info mt-30">
                                    <div class="info-icon">
                                        <i class="lni-phone-handset"></i>
                                    </div>
                                    <div class="info-content">
                                        <p>+234 806 880 7060</p>
                                    </div>
                                </div> <!-- single info -->
                            </li>
                            <li>
                                <div class="single-info mt-30">
                                    <div class="info-icon">
                                        <i class="lni-envelope"></i>
                                    </div>
                                    <div class="info-content">
                                        <p>contact@impactvibes.com</p>
                                    </div>
                                </div> <!-- single info -->
                            </li>
                            <li>
                                <div class="single-info mt-30">
                                    <div class="info-icon">
                                        <i class="lni-home"></i>
                                    </div>
                                    <div class="info-content">
                                        <p>Owerri Tech Hub, Opp City School Owerri.</p>
                                    </div>
                                </div> <!-- single info -->
                            </li>
                        </ul>
                    </div> <!-- contact info -->
                </div>
                <div class="col-lg-8">
                    <div class="contact-form">
                        <form id="contact-form" action="assets/contact.php" method="post" data-toggle="validator">
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
                                <div class="col-lg-12">
                                    <div class="single-form form-group">
                                        <select class="form-control form-control-lg" name="help">
                                            <option selected disabled>Select a Service/Product</option>
                                            <option value="market">Market</option>
                                            <option value="mentor">Mentors Connect</option>
                                            <option value="venturesDeal">Ventures Deal</option>
                                            <option value="opportunity">Opportunity</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div> <!-- single form -->
                                </div>
                                <div class="col-lg-12">
                                    <div class="single-form form-group">
                                        <textarea name="message" placeholder="What went wrong?" data-error="Please,leave us a message." required="required"></textarea>
                                        <div class="help-block with-errors"></div>
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
            </div> <!-- row -->
        </div> <!-- contact box -->
    </div> <!-- container -->
</section>
<!--====== CONTACT PART ENDS ======-->
@endsection
