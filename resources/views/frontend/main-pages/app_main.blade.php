<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from nastla.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Nov 2020 03:48:46 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <!-- Please do not delete this line -->
    <base >
    <meta charset="utf-8">
    <title>Nastla Ltd | Home</title>
    <link href="{{ asset('nestla/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('nestla/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('nestla/css/custom.css') }}" rel="stylesheet">

    <link href="{{ asset('nestla/css/effect_style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('nestla/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('nestla/css/animate.css') }}">
    <link href="{{ asset('nestla/css/responsive_bootstrap_carousel.css') }}" rel="stylesheet" media="all">

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-180747202-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-180747202-1');
</script>


</head>

        <body>

            <!--=========header start============-->
            <header class="header3 ">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 display-block ">
                            <a href=".html" class="logo"><img src="{{ asset('nestla/images/header3-logo.png') }}" style="width: 80%"
                                                          class="img-responsive" alt="logo"></a>
                        </div>
                        <div class="col-lg-3 col-md-9 col-sm-12 col-xs-12 hdr3-right">

                            <div class="header-socials">
                                <a href="javascript:void(0)"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="javascript:void(0)"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <nav id="main-navigation-wrapper" style="-webkit-box-shadow: 0 2px 18px -7px rgba(0,0,0,0.75);
-moz-box-shadow: 0 2px 18px -7px rgba(0,0,0,0.75);
box-shadow: 0 2px 18px -7px rgba(0,0,0,0.75);"
                     class="navbar navbar-default navbar2-wrap navbar3-wrap ">
                    <div class="container">
                        <div class="navbar-header">
                            <div class="logo-menu"><img src="{{ asset('nestla/images/header-3-sticky-logo.png') }}" alt=""></div>
                            <button type="button" data-toggle="collapse" data-target="#main-navigation"
                                    aria-expanded="false"
                                    class="navbar-toggle collapsed"><span class="sr-only">Toggle navigation</span><span
                                        class="icon-bar"></span><span class="icon-bar"></span><span
                                        class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="var2-nav var3-nav">
                            <div id="main-navigation" class="collapse navbar-collapse ">
                                <ul class="nav navbar-nav">
                                    <li>
                                        <a href="{{ url('/')}}" class='active'>Home</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/about')}}" >About Us</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/faq')}}" >FAQ</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/terms')}}" >Terms</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/investment')}}" >Investment</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/affiliate')}}" >Affiliation</a>
                                    </li>
                                                                            <li>
                                            <a href="{{ url('/contact')}}" >Contact us</a>
                                        </li>
                                                                    </ul>
                                                                    <a class="header-requestbtn header2-requestbtn header3-requestbtn hvr-bounce-to-right"
                                       href="{{ route('register')}}">Register</a>
                                    <a class="header-requestbtn header2-requestbtn header-requestbtn hvr-bounce-to-right"
                                                                href="{{ route('login') }}">Login</a>
                                                            </div>
                        </div>
                    </div>
                </nav>
            </header>
            <!--=========header end============-->




            @yield('content')



    <!--=========Footer Start============-->
    <footer>

        <div class="banner-bottom-boxes index5-boxes">
            <ul>
                <li class="first-box">
                    <span class="icons"><img src="{{ asset('nestla/images/delivery-icon1.png') }}" alt="delivery-icon"></span>
                    <h4>Instant payments</h4>
                    <p>Without unnecessary waiting time</p>
                </li>
                <li class="third-box">
                    <span class="icons"><img src="{{ asset('nestla/images/standard-labor-icon.png') }}" alt="labor-icon"></span>
                    <h4>Great referral program</h4>
                    <p>Multi-level standard & representative commissions</p>
                </li>
                <li class="second-box">
                    <span class="icons"><img src="{{ asset('nestla/images/technology-icon1.png') }}" alt="technology-icon"></span>
                    <h4>Established UK company</h4>
                    <p>Legally registered company</p>
                </li>

            </ul>
        </div>

        <div class="ftr-section">
            <div class="container">
                <ul class="footer-info">
                    <li class="ftr-loc">44 Ludgate Hill Fleet Street, <br /> London, UK, EC4M 7AA</li>
                    <li class="ftr-phn">+44 7700 900077</li>
                    <li class="ftr-msg">support@nastla.com</li>
                    <li class="ftr-support">9 To 5 Working Hours</li>
                </ul>
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12  ftr-about-text">
                        <h6>About Us</h6>
                        <p class="marbtm20 line-height26">In 2018 we decided to enter the international market of
                                                          long-term investments and offer unique cooperation terms for
                                                          people who prefer a passive online income and are seeking for
                                                          reliable financial partners. </p>
                        <a class="ftr-read-more" href="{{ url('/about')}}">Read More</a>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 ftr-sol-column">
                        <h6>Quick Links</h6>
                        <ul class="footer-link">
                            <li>
                                <a href="{{ url('/about')}}">- About Us</a>
                            </li>
                            <li>
                                <a href="{{ url('/news')}}">- News</a>
                            </li>
                            <li>
                                <a href="{{ url('/testimonials')}}">- Testimonials</a>
                            </li>
                            <li>
                                <a href="{{ url('/faq')}}">- FAQ</a>
                            </li>
                            <li>
                                <a href="{{ route('register')}}">- Register </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-sm-6 col-xs-12 ftr-link-column">
                        <h6>Quick Links</h6>
                        <ul class="footer-link">
                            <li>
                                <a href="{{ route('login')}}">- Login</a>
                            </li>
                            <li>
                                <a href="{{ url('/terms')}}">- Terms</a>
                            </li>
                            <li>
                                <a href="{{ url('/contact')}}">- Contact</a>
                            </li>
                            <li>
                                <a href="{{ url('/investment')}}">- Investment</a>
                            </li>
                            <li>
                                <a href="{{ route('frontend.deposits.new_deposit') }}">- New deposit</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 ftr-follow-column pull-right">
                        <h6>Follow Us</h6>
                        <div class="header-socials footer-socials">
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </div>
                        <span class="ftr-logo img"><img src="{{ asset('nestla/images/header3-logo.png') }}" style="width: 80%"
                                                        class="img-responsive" alt="logo"></span>
                    </div>
                </div>
                <div class="footer-btm">
                    <div class="col-md-6 col-sm-6 col-xs-12 pad-left_zero pad-right_zero">
                        <p>Copyright © 2018 Nastla. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--=========Footer end============-->
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <h3>Search</h3>
                    <div class="search-form">
                        <input type="text" class="search_lightbox_input" placeholder="Search...">
                        <input type="text" class="search_lghtbox_btn">
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{ asset('nestla/js/jquery.min.js') }}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ asset('nestla/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('nestla/js/jquery.touchSwipe.min.js') }}"></script>
<script src="{{ asset('nestla/js/responsive_bootstrap_carousel.js') }}"></script>
<script src="{{ asset('nestla/js/comming-soon.js') }}"></script>
<script src="{{ asset('nestla/js/custom.js') }}"></script>
<script src="{{ asset('nestla/js/theme.js') }}"></script>
<script src="{{ asset('nestla/js/calc.js') }}"></script>
</body>

<!-- Mirrored from nastla.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Nov 2020 03:49:18 GMT -->
</html>
