@extends('layouts.app')
@section('title')Arom Egypt registry | Registration welcome @endsection

@section('style')

@endsection
@section('content')

<!-- Start main-content -->
<div class="main-content" id="">
    <input type="hidden" value="{{url('/projects')}}" name="url" id="url">
    <section>
        <div class="container-fluid p-0">
            <!-- Section: inner-header -->
            <section class="inner-header divider layer-overlay overlay-deep" data-bg-img="images/header-1.jpg">
                <div class="container pt-90 pb-50">
                    <!-- Section Content -->
                    <div class="section-content">
                        <div class="row">
                            <div class="col-md-12 xs-text-center">
                                <h3 class="font-28">Registration Successful</h3>
                                <ol class="breadcrumb white mt-10">
                                    <li><a href="{{url('/')}}">Home</a></li>
                                    <li class="active text-theme-colored">Welcome</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <div class="container">

                <div class="row">
                    <div class="redirect" style="text-align: center;font-size: 18px;margin: 50px auto 0 auto;">
                        System will redirect you automatically ...
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="welcome-wrapper p-20" style="
                    border: solid #00A3C8 2px;
                    text-align: center;
                    margin: 0px auto;
                    font-size: 28px;
">
                            Thanks for signing up to our arom registration<br>

                            we're glade you're here<br>

                            now you are arom insider you will be among the first to hear about upcoming news
                        </div>
                    </div>
                </div>

                <div class="row mb-150">
                    <div class="col-sm-6 pr-0">
                        <a href="{{url('/my-profile')}}" class=" p-20 btn btn-colored btn-flat btn-theme-colored btn-black-colored w-100">Profile Page</a>
                    </div>
                    <div class="col-sm-6 pl-0">
                        <a href="{{url('/')}}" class=" p-20 btn btn-colored btn-flat btn-theme-colored w-100">Home Page</a>
                    </div>
                </div>

            </div>


        </div>
    </section>
</div>
<!-- end main-content -->



@endsection




@section('script')
    <!-- Footer Scripts -->

    <script>

            var url= document.getElementById("url").value;

            setTimeout(function(){window.location = url;}, 15000);

    </script>
@endsection