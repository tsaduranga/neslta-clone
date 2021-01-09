
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from nastla.com/register by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Nov 2020 03:50:10 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <!-- Please do not delete this line -->
    <base >
    <meta charset="utf-8">
    <title>Nastla Ltd | Register</title>
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

<body class="yellow-body">

    <div class="comingsoon-page">


<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-4">

        <h2 class="h-title-3 text-center"><span class="color-1">Register</span> Account</h2>


                            <div class="form-block marbtm30">

                    <p class="fnt-17 marbtm30">Please fill the registration form below to proceed with registration in
                                               Nastla Ltd.</p>

                    <form class="form" name="registerForm" method="post" action="{{ route('register') }}">

                        @csrf

                        <h4 class="h-title-2"><span class="color-1">General</span> Details</h4>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="username" value="{{ old('username') }}" required>
                             @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong class="text-danger">{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" value="{{ old('email') }}" required>
                             @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong class="text-danger">{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <h4 class="h-title-2 martop20"><span class="color-1">Security</span> Details</h4>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password" value="" required>
                                     @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong class="text-danger">{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input type="password" class="form-control" name="password_confirmation" value="" required>

                                </div>
                            </div>
                        </div>


                                <div class="form-group">
                                    <label>PerfectMoney</label>
                                    <input type="text" class="form-control" name="perfectmoney" value="{{ old('perfectmoney') }}" placeholder="e.g U12345678">
                                     @error('perfectmoney')
                                    <span class="invalid-feedback" role="alert">
                                        <strong class="text-danger">{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Payeer</label>
                                    <input type="text" class="form-control" name="payeer" value="{{ old('payeer') }}" placeholder="e.g P12345678">
                                     @error('payeer')
                                    <span class="invalid-feedback" role="alert">
                                        <strong class="text-danger">{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Bitcoin</label>
                                    <input type="text" class="form-control" name="bitcoin" value="{{ old('bitcoin') }}" placeholder="e.g 1HiMoMgBaAikFHgAt3M4YJtetp4HrnsiXu ">
                                     @error('bitcoin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong class="text-danger">{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>






                        <div class="form-group checkbox">
                            <label><input type="checkbox" name="agree"  required> I agree to terms & conditions</label>
                        </div>

                        <div class="form-group">
                            <button type="submit" data-animation="animated fadeInUp" class="button learn-more-btn home-link hvr-bounce-to-right">
                                Register
                            </button>
                        </div>
                    </form>
                </div>

        <div class="text-center">
            <a class="logo" href=".html"><img src="{{ asset('nestla/images/logo.png') }}" class="img-responsive"
                                         style="width: 160px; height:45px"
                                         alt="logo-image"></a>
        </div>
    </div>
    <div class="col-md-2">
        <div class="service_section1 ">
            <div class="right_sec martop75">
                <i class="fa fa-quote-left"></i>
                <div class="simple-text">
                    <p>Not everyone has the detailed knowledge of financial markets and for many people the best choice
                       is to work with financial services provider such as Nastla.</p>
                </div>
                <i class="fa fa-quote-right"></i>
                <h5><i class="fa fa-minus"></i> Andrew O'Brien</h5>
            </div>
        </div>
        <p class="color-white fnt-17 text-justify">With expertise we can provide reliable financial products.</p>

        <p class="color-white fnt-14 text-justify marbtm30"> Whether you are a small or large investor, we can assist
                                                             you with your investment goals. </p>

        <a data-animation="animated fadeInUp"
           class="header-requestbtn learn-more-btn btn-block  hvr-bounce-to-right " href="login.html">Registered Already
                                                                                                 ?
        </a>

    </div>
    <div class="col-md-3"></div>
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

<!-- Mirrored from nastla.com/register by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Nov 2020 03:50:11 GMT -->
</html>

