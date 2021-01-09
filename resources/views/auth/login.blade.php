{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}







<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from nastla.com/login by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Nov 2020 03:50:11 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <!-- Please do not delete this line -->
    <base >
    <meta charset="utf-8">
    <title>Nastla Ltd | Login</title>
    <link href="{{ asset('nestla/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('nestla/css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('nestla/css/custom.css')}}" rel="stylesheet">

    <link href="{{ asset('nestla/css/effect_style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('nestla/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{ asset('nestla/css/animate.css')}}">
    <link href="{{ asset('nestla/css/responsive_bootstrap_carousel.css')}}" rel="stylesheet" media="all">

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
        <h2 class="h-title-3 text-center"><span class="color-1">Access</span> Account</h2>
        <div class="form-block marbtm30">

            <p class="fnt-17 marbtm30">Please enter your login details to access your account.</p>




            <form class="form" method="post" name="loginForm" action="{{ route('login') }}">


                @csrf

                <h4 class="h-title-2"><span class="color-1">Enter Login</span> Credentials</h4>
                <div class="form-group">
                    <label>Email</label>
                    {{-- <input class="form-control" type="email" name="email" required value=""/> --}}
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong class="text-danger">{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Password</label>
                    {{-- <input class="form-control" type="password" name="password" required/> --}}
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>



                <div class="form-group">
                    <button type="submit" class="button learn-more-btn home-link hvr-bounce-to-right">Login</button>
                    <a href="reset_password.html" class="marleft20">Forgot password?</a>
                </div>
            </form>
        </div>

        <div class="text-center">
            <a class="logo" href="#"><img src="{{ asset('nestla/images/logo.png') }}" class="img-responsive" style="width: 160px; height:45px"
                                         alt="logo-image"></a>
        </div>
    </div>
    <div class="col-md-2">
        <div class="service_section1 ">
            <div class="right_sec martop0">
                <i class="fa fa-quote-left"></i>
                <div class="simple-text">
                    <p>Not everyone has the detailed knowledge of financial markets and for many people the best choice is to work with financial services provider such as Nastla.</p>
                </div>
                <i class="fa fa-quote-right"></i>
                <h5><i class="fa fa-minus"></i> Andrew O'Brien</h5>
            </div>
        </div>
        <p class="color-white fnt-17 text-justify">With expertise we can provide reliable financial products.</p>

        <p class="color-white fnt-14 text-justify marbtm30"> Whether you are a small or large investor, we can assist you with your investment goals. </p>


        <a data-animation="animated fadeInUp" class="header-requestbtn learn-more-btn btn-block  hvr-bounce-to-right" href="{{ route('register') }}">New User ?</a>


    </div>
    <div class="col-md-3"></div>

</div>

    </div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{ asset('nestla/js/jquery.min.js')}}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ asset('nestla/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('nestla/js/jquery.touchSwipe.min.js')}}"></script>
<script src="{{ asset('nestla/js/responsive_bootstrap_carousel.js')}}"></script>
<script src="{{ asset('nestla/js/comming-soon.js')}}"></script>
<script src="{{ asset('nestla/s/custom.js')}}j"></script>
<script src="{{ asset('nestla/js/theme.js')}}"></script>
<script src="{{ asset('nestla/js/calc.js')}}"></script>
</body>

<!-- Mirrored from nastla.com/login by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Nov 2020 03:50:12 GMT -->
</html>
