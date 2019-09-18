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

                <form id="login_form" class="login100-form validate-form" method="POST" action="{{ route('password.update') }}">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="login-logo-wrapper p-b-20">
                        <a href="{{url('/')}}"> <img class="login-logo" src="{{asset('images/logo-0-wide-large.png')}}"></a>
                    </div>

                    <span class="login100-form-title p-b-43">
						Password Reset
					</span>

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                    <div class="wrap-input100 validate-input @error('email') error-input100 @enderror" data-validate = "Valid email is required: ex@abc.xyz">
                        <input id="email" type="email" class="input100" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
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





                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="w-100">
                                <button type="submit" class="login100-form-btn">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
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




    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">

                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
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