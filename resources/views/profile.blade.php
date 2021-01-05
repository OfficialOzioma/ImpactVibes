@extends('layouts.landing')

@section('content')

<br><br><br><br><br><br><br><br>
<section id="team" class="team-area pt-125 pb-130">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title text-center pb-25">
                    <h3 class="title mb-15">Our Carrier Profile Dashboard</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm od tempor incididunt ut labore et dolore magna aliqua.</p>
                </div> <!-- section title -->
            </div>
            <div class="col-lg-4">
                <div class="single-form form-group">
                    <input type="text" name="name" placeholder="Search by name"  required="required">
                  
                </div> 
                <button class="btn btn-success" type="submit">Search</button>
               
            </div>
        </div> <!-- row -->
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-6 col-sm-8">
                <div class="single-temp text-center mt-30">
                    <div class="team-image">
                        <img src="assets/images/team/t-1.jpg"
                         alt="Team">
                    </div>
                    <div class="team-content mt-30">
                        <h4 class="title mb-10"><a href="#">Sir Abel</a></h4>
                        <span>FOUNDER</span>
                        <ul class="social mt-15">
                            <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                            <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                            <li><a href="#"><i class="lni-instagram"></i></a></li>
                        </ul>
                    </div>
                </div> <!-- single temp -->
            </div>
            <div class="col-lg-3 col-md-6 col-sm-8">
                <div class="single-temp text-center mt-30">
                    <div class="team-image">
                        <img src="assets/images/team/t-2.jpg"
                         alt="Team">
                    </div>
                    <div class="team-content mt-30">
                        <h4 class="title mb-10"><a href="#">Amadi Austin </a></h4>
                        <span>Software Engineer</span>
                        <ul class="social mt-15">
                            <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                            <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                            <li><a href="#"><i class="lni-instagram"></i></a></li>
                        </ul>
                    </div>
                </div> <!-- single temp -->
            </div>
            <div class="col-lg-3 col-md-6 col-sm-8">
                <div class="single-temp text-center mt-30">
                    <div class="team-image">
                        <img src="assets/images/team/t-3.jpg"
                         alt="Team">
                    </div>
                    <div class="team-content mt-30">
                        <h4 class="title mb-10"><a href="#">Dike Paschal</a></h4>
                        <span>Software Engineer</span>
                        <ul class="social mt-15">
                            <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                            <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                            <li><a href="#"><i class="lni-instagram"></i></a></li>
                        </ul>
                    </div>
                </div> <!-- single temp -->
            </div>
            <div class="col-lg-3 col-md-6 col-sm-8">
                <div class="single-temp text-center mt-30">
                    <div class="team-image">
                        <img src="assets/images/team/t-4.jpg"
                         alt="Team">
                    </div>
                    <div class="team-content mt-30">
                        <h4 class="title mb-10"><a href="#">Sir Abel</a></h4>
                        <span>Marketing Manager</span>
                        <ul class="social mt-15">
                            <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                            <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                            <li><a href="#"><i class="lni-instagram"></i></a></li>
                        </ul>
                    </div>
                </div> <!-- single temp -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>



@endsection
