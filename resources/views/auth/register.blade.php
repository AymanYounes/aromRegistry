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

@section('title')Arom Egypt registry | Sign up @endsection
@section('content')

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">

                <form class="login100-form signup-form validate-form" method="post" action="{{url('/signup')}}">

                    {{ csrf_field() }}
                    <div class="login-logo-wrapper p-b-20">
                        <a href="{{url('/')}}"> <img class="login-logo" src="images/logo-0-wide-large.png"></a>
                    </div>



                    <span class="login100-form-title p-b-43">
						Join us
					</span>


                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                        <input class="input100" type="text" name="email">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Email</span>
                    </div>


                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="password">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Password</span>
                    </div>


                    <div class="wrap-input100 validate-input" data-validate="Password verify is required">
                        <input class="input100" type="password" name="repassword">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Password verify</span>
                    </div>


                    {{--<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">--}}
                        {{--<input class="input100" type="email" name="email">--}}
                        {{--<span class="focus-input100"></span>--}}
                        {{--<span class="label-input100">Email</span>--}}
                    {{--</div>--}}


                    <div class="wrap-input100 validate-input" data-validate = "Doctor name is required">
                        <input class="input100" type="text" name="name">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Doctor Name</span>
                    </div>


                    <div class="wrap-input100 validate-input select-input-wrapper" data-validate = "Doctor name is required">
                        <select class="input100 select-input" name="site">
                            <option value=""> Site </option>
                            <option value="5">
                                Ain Shams University Hospital
                            </option>
                            <option value="1">
                                Al Azhar University Hospitals BOYS&nbsp;(CAIRO)
                            </option>
                            <option value="4">
                                Al Azhar University Hospitals&nbsp; (ASSUIT)
                            </option>
                            <option value="3">
                                Al Azhar University Hospitals&nbsp; (DAMIETTA)
                            </option>
                            <option value="2">
                                Al Azhar University Hospitals&nbsp; GIRLS (CAIRO)
                            </option>
                            <option value="10">
                                Alexandria University Hospitals
                            </option>
                            <option value="11">
                                Assiut University Hospital
                            </option>
                            <option value="21">
                                Aswan University Hospital
                            </option>
                            <option value="12">
                                Beni Suef University Hospital
                            </option>
                            <option value="6">
                                Cairo University Hospitals
                            </option>
                            <option value="13">
                                Fayoum university Hospital
                            </option>
                            <option value="15">
                                Ismailia Teaching oncology hospital
                            </option>
                            <option value="16">
                                Kafr Elsheikh University Hospital
                            </option>
                            <option value="17">
                                Mansoura University Hospital
                            </option>
                            <option value="18">
                                Minufiya University Hospital
                            </option>
                            <option value="9">
                                MINYA University Hospitals
                            </option>
                            <option value="7">
                                National Cancer Institute Egypt
                            </option>
                            <option value="8">
                                Souaad Kafafi University Hospital
                            </option>
                            <option value="19">
                                South Valley University Hospital
                            </option>
                            <option value="14">
                                Suez Canal University Hospital
                            </option>
                            <option value="20">
                                Tanta University Hospital
                            </option>
                            <option value="22">
                                ZAGAZIG University Hospitals
                            </option>
                        </select>
                        <span class="focus-input100"></span>
                        <!-- <span class="label-input100">Site</span> -->
                    </div>


                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Sign up
                        </button>
                    </div>

                    <div class="text-center p-t-46 p-b-20">
						<span class="txt2">
							or sign up using
						</span>
                    </div>

                    <div class="login100-form-social flex-c-m">
                        <a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
                            <i class="fa fa-facebook-f" aria-hidden="true"></i>
                        </a>

                        <a href="#" class="login100-form-social-item flex-c-m bg3 m-r-5">
                            <i class="fa fa-google" aria-hidden="true"></i>
                        </a>
                    </div>
                    <p class="signup-p m-t-20">
                        Already have an account?
                        <a href="{{url('login')}}" class="signup-link">
                            Login
                        </a>
                    </p>
                </form>

                <div class="login-fixed-logo-wrapper" style="z-index: 10000">
                    <a href="{{url('/')}}"><img class="login-fixed-logo" src="images/logo-0-wide-large.png"></a>
                </div>
                <div class="login100-more" style="background-image: url('images/bg-13.jpg');">
                </div>
                <div class="overview"></div>
            </div>
        </div>
    </div>


    </div>

@endsection




@section('script')
    <!-- Footer Scripts -->

    <!--===============================================================================================-->
    {{--<script src="{{asset('vendor/jquery/jquery-3.2.1.min.js')}}"></script>--}}
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
    <script src="{{asset('js/main.js')}}"></script>

@endsection