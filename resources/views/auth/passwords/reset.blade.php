@extends('layouts.app')

@section('style')
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
@endsection

@section('title')Arom Egypt registry | Reset password @endsection
@section('content')




    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">

                <form id="signup_form" class="login100-form validate-form" method="POST" action="{{ route('password.update') }}">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="login-logo-wrapper p-b-20">
                        <a href="{{url('/')}}"> <img class="login-logo" src="{{asset('images/logo-0-wide-large.png')}}"></a>
                    </div>

                    <span class="login100-form-title p-b-43">
						Password Reset
					</span>


                    <div class="wrap-input100 validate-input @error('email') error-input100 @enderror" data-validate = "Valid email is required: ex@abc.xyz">
                        <input id="email" type="email" class="input100" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                        {{--<input class="input100" type="text" name="email">--}}
                        <span class="focus-input100"></span>
                        <span class="label-input100">{{ __('E-Mail Address') }}</span>

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




                    <div class="wrap-input100 validate-input @error('password') error-input100 @enderror" data-validate = "Valid email is required: ex@abc.xyz">
                        <input id="password" type="password" class="input100" name="password"  required autocomplete="new-password" autofocus>
                        {{--<input class="input100" type="text" name="email">--}}
                        <span class="focus-input100"></span>
                        <span class="label-input100">{{ __('Password') }}</span>

                    </div>

                    @error('password')
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





                    <div class="wrap-input100 validate-input " data-validate = "Valid email is required: ex@abc.xyz">
                        <input id="password-confirm" type="password" class="input100" name="password_confirmation"  required autocomplete="new-password">
                        {{--<input class="input100" type="text" name="email">--}}
                        <span class="focus-input100"></span>
                        <span class="label-input100">{{ __('Confirm Password') }}</span>

                    </div>

                    <div class="form-group row mb-0">
                            <div class="w-100">
                                <button type="submit" class="login100-form-btn">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>


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
    <script src="{{asset('vendor/jquery/jquery-3.2.1.min.js')}}"></script>
    <!--===============================================================================================-->

    <script src="{{asset('js/auth/signup.js')}}"></script>

@endsection