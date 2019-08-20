@extends('layouts.app')

@section('style')
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/animate/animate.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/animsition/css/animsition.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/daterangepicker/daterangepicker.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
@endsection

@section('title')Arom Egypt registry | Forget password @endsection
@section('content')



    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">


                <form id="login_form" class="login100-form validate-form" method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="login-logo-wrapper p-b-20">
                        <a href="{{url('/')}}"> <img class="login-logo" src="{{asset('images/logo-0-wide-large.png')}}"></a>
                    </div>

                    <span class="login100-form-title p-b-43">
						Password Reset
					</span>


                    <div class="wrap-input100 validate-input @error('email') error-input100 @enderror" data-validate = "Valid email is required: ex@abc.xyz">
                        <input id="email" type="email" class="input100" name="email" value="{{ old('email') }}" required>
                        {{--<input class="input100" type="text" name="email">--}}
                        <span class="focus-input100"></span>
                        <span class="label-input100">Email</span>

                    </div>
                    @error('email')
                    <span class="invalid-feedback" role="alert" style="height: 50px;
                    display: -webkit-box;
                    display: -webkit-flex;
                    display: -moz-box;
                    display: -ms-flexbox;
                    display: flex;
                    flex-wrap: wrap;">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <div class="form-group row mb-0">
                        <div class="w-100">
                            <button type="submit" class="login100-form-btn">
                                {{ __('Send Password Reset Link') }}
                            </button>
                        </div>
                    </div>
                    <p class="signup-p m-t-20">
                        Back to
                        <a href="{{url('login')}}" class="signup-link">
                            Login
                        </a>
                    </p>
                </form>
                <div class="login-fixed-logo-wrapper" style="z-index: 9998">
                    <a href="{{url('/')}}">
                        <img class="login-fixed-logo" src="{{asset('images/logo-0-wide-large.png')}}">
                    </a>
                </div>
                <div class="login100-more" style="background-image: url({{asset('images/bg-12.jpg')}});">
                </div>

                <div class="overview"></div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <!-- Footer Scripts -->

    <!--===============================================================================================-->
    <script src="{{asset('vendor/animsition/js/animsition.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('vendor/bootstrap/js/popper.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('vendor/select2/select2.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('vendor/daterangepicker/moment.min.js')}}"></script>
    <script src="{{asset('vendor/daterangepicker/daterangepicker.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('vendor/countdowntime/countdowntime.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('js/auth/signup.js')}}"></script>

@endsection