
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />

        <!--====== Title ======-->
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!--====== Favicon Icon ======-->
        <link rel="shortcut icon" href=" {{ asset('assets/images/favicon.png') }}" type="image/png">

        <!-- https://fonts.google.com/specimen/Roboto -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700"/>

        <!-- https://fontawesome.com/ -->
        <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }} ">

        <!-- https://getbootstrap.com/ -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }} ">

        <!-- Product Admin CSS Template https://templatemo.com/tm-524-product-admin-->
        <link rel="stylesheet" href="{{ asset('assets/css/templatemo-style.css') }} ">

        <!--====== Magnific Popup css ======-->
        <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">

        <!--====== Slick css ======-->
        <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }} ">

        <!--====== Line Icons css ======-->
        <link rel="stylesheet" href="{{ asset('assets/css/LineIcons.css') }} ">

        <!--====== Default css ======-->
        <link rel="stylesheet" href="{{ asset('assets/css/default.css') }} ">

        <!--====== Style css ======-->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }} ">

        <!--====== Responsive css ======-->
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }} ">

    </head>

    <body>
        <nav class="navbar navbar-expand-xl">
        <div class="container h-100">
            <a class="navbar-brand" href="index.html">
            <h1 class="tm-site-title mb-0">Product Admin</h1>
            </a>
            <button
            class="navbar-toggler ml-auto mr-0"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
            >
            <i class="fas fa-bars tm-nav-icon"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto h-100">
                <li class="nav-item">
                    <a class="nav-link" href="/dashboard">
                        <i class="fas fa-tachometer-alt"></i> Dashboard
                        <span class="sr-only">(current)</span>
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link " href="/product"  >
                        <i class="fas fa-shopping-cart"></i>
                        <span> View Products  </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="/product/create">
                        <i class="fas fa-plus"></i> Add Products
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="accounts.html">
                        <i class="far fa-user"></i> Views
                    </a>
                </li>
                <li class="nav-item dropdown">
                <a
                    class="nav-link dropdown-toggle"
                    href="#"
                    id="navbarDropdown"
                    role="button"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                >
                    <i class="fas fa-cog"></i>
                    <span> Settings <i class="fas fa-angle-down"></i> </span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Profile</a>
                    <a class="dropdown-item" href="#">Billing</a>
                    <a class="dropdown-item" href="#">Customize</a>
                </div>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link d-block" href="login.html">

                </a>
                </li>
            </ul>
            </div>
        </div>
        </nav>
        <div class="container">
            @yield('content')
        </div>


        <section id="footer" class="footer-area">
            <div class="container">
                <div class="footer-widget pt-75 pb-120">
                    <div class="row">
                        <div class="col-lg-3 col-md-5 col-sm-7">
                            <div class="footer-logo mt-40">
                                <a href="/">
                                    <img src="assets/images/logo.png" alt="Logo">
                                </a>
                                <p class="mt-10">Gravida nibh vel velit auctor aliquetn quibibendum auci elit cons equat ipsutis sem nibh id elit.</p>
                                <ul class="footer-social mt-25">
                                    <li><a href="/"><i class="lni-facebook-filled"></i></a></li>
                                    <li><a href="/"><i class="lni-twitter-original"></i></a></li>
                                    <li><a href="/"><i class="lni-instagram"></i></a></li>
                                </ul>
                            </div> <!-- footer logo -->
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-5">
                            <div class="footer-link mt-50">
                                <h5 class="f-title">Services</h5>
                                <ul>
                                    <li><a href="/">Architechture Design</a></li>
                                    <li><a href="/">Interior Design</a></li>
                                    <li><a href="/">Autocad Services</a></li>
                                    <li><a href="/">Lighting Design</a></li>
                                    <li><a href="/">Poster Design</a></li>
                                </ul>
                            </div> <!-- footer link -->
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-5">
                            <div class="footer-link mt-50">
                                <h5 class="f-title">Help</h5>
                                <ul>
                                    <li><a href="/">Forum</a></li>
                                    <li><a href="/">Blog</a></li>
                                    <li><a href="/">Help Center</a></li>
                                    <li><a href="/">Contact Us</a></li>
                                    <li><a href="/">Privacy Policy</a></li>
                                </ul>
                            </div> <!-- footer link -->
                        </div>
                        <div class="col-lg-4 col-md-5 col-sm-7">
                            <div class="footer-info mt-50">
                                <h5 class="f-title">Contact Info</h5>
                                <ul>
                                    <li>
                                        <div class="single-footer-info mt-20">
                                            <span>Phone :</span>
                                            <div class="footer-info-content">
                                                <p>+88123 4567 890</p>
                                                <p>+88123 4567 890</p>
                                            </div>
                                        </div> <!-- single footer info -->
                                    </li>
                                    <li>
                                        <div class="single-footer-info mt-20">
                                            <span>Email :</span>
                                            <div class="footer-info-content">
                                                <p>contact@yourmail.com</p>
                                                <p>support@yourmail.com</p>
                                            </div>
                                        </div> <!-- single footer info -->
                                    </li>
                                    <li>
                                        <div class="single-footer-info mt-20">
                                            <span>Address :</span>
                                            <div class="footer-info-content">
                                                <p>5078 Jensen Key, Port Kaya, WV 73505</p>
                                            </div>
                                        </div> <!-- single footer info -->
                                    </li>
                                </ul>
                            </div> <!-- footer link -->
                        </div>
                    </div> <!-- row -->
                </div> <!-- footer widget -->
                <div class="footer-copyright pt-15 pb-15">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="copyright text-center">
                                <p>Crafted by <a href="https://uideck.com" rel="nofollow">UIdeck</a></p>
                            </div> <!-- copyright -->
                        </div>
                    </div> <!-- row -->
                </div> <!--  footer copyright -->
            </div> <!-- container -->
        </section>


        <!-- https://jquery.com/download/ -->
        <script src="{{ asset('assets/js/vendor/jquery-3.3.1.min.js') }}"></script>


        <!-- https://getbootstrap.com/ -->
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

        <script>
        $(function() {
            $("#expire_date").datepicker();
        });
        </script>
    </body>
</html>
