@extends('layouts.app')
@section('title')Arom Egypt registry | Profile @endsection

@section('style')
    <style>

        .toggled_password,.toggled_name,.toggled_title,.toggled_address,.toggled_phone,.toggled_email{
            display: none;
        }
    </style>
@endsection
@section('content')


    <!-- Start main-content -->
    <div class="main-content">
        <!-- Section: inner-header -->
        <section class="inner-header divider layer-overlay overlay-deep" data-bg-img="images/slider/slider-3.jpg">
            <div class="container pt-90 pb-50">
                <!-- Section Content -->
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12 xs-text-center">
                            <h3 class="font-28">My Profile</h3>
                            <ol class="breadcrumb white mt-10">
                                <li><a href="index.html">Home</a></li>
                                <li class="active text-theme-colored">My Profile</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Doctor Details -->
        <section class="">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-sx-12 col-sm-4 col-md-4 sidebar pull-left">
                            <div class="doctor-thumb">
                                <img src="images/dr-hesham.jpg" alt="">
                            </div>
                            <ul class="social-icons icon-gray mt-15 mb-15">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-8 col-md-8 pull-right pl-60 pl-sm-15">
                            <div>
                                <a style="float: right" id="edit_name"><i class="fa fa-edit"></i></a>
                                <h3>Prof. Hesham Hamoud</h3>

                                <div class="toggled_name">
                                    <form action="#">
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label>Name</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </div>
                                    </form>
                                </div>


                                <a style="float: right" id="edit_title"><i class="fa fa-edit"></i></a>
                                <h5 class="text-theme-colored">MBBS (Sydney), FRACS (Paediatric Surgery)</h5>
                                <div class="toggled_title">
                                    <form action="#">
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label>Title</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="mt-30">
                                <dl class="dl-horizontal doctor-info">

                                    <dt>Address</dt>
                                    <dd>
                                        Suite 27, Medical Centre, The Sunshine Coast Private Hospital, QLD 4556
                                        <a style="float: right" id="edit_address"><i class="fa fa-edit"></i></a>
                                        <div class="toggled_address">
                                            <form action="#">
                                                <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <label>Address</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                </div>
                                            </form>
                                        </div>
                                    </dd>
                                    <hr>
                                    <dt>Phone</dt>
                                    <dd>
                                        +1-23-345-6789
                                        <a style="float: right" id="edit_phone"><i class="fa fa-edit"></i></a>
                                        <div class="toggled_phone">
                                            <form action="#">
                                                <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <label>Phone</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                </div>
                                            </form>
                                        </div>
                                    </dd>
                                    <hr>
                                    <dt>Email</dt>
                                    <dd>
                                        myemail@yourdomain.com
                                        <a style="float: right" id="edit_email"><i class="fa fa-edit"></i></a>

                                        <div class="toggled_email">
                                            <form action="#">
                                                <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <label>Email</label>
                                                        <input type="email" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                </div>
                                            </form>
                                        </div>
                                    </dd>
                                    <hr>
                                    <dt>Password</dt>
                                    <dd>
                                        <a href="javascript:void(0)" id="change_password" class="text-theme-colored">Change Password</a>

                                        <div class="toggled_password">
                                            <form action="#">
                                                <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <label>Password</label>
                                                        <input type="password" class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Confirm Password</label>
                                                        <input type="password" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                </div>
                                            </form>
                                        </div>

                                    </dd>
                                    <hr>
                                </dl>
                            </div>
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

        $(document).ready(function(){

            $('#change_password').on('click', function(event) {
                $('.toggled_password').toggle('show');
            });


            $('#edit_name').on('click', function(event) {
                $('.toggled_name').toggle('show');
            });


            $('#edit_title').on('click', function(event) {
                $('.toggled_title').toggle('show');
            });


            $('#edit_address').on('click', function(event) {
                $('.toggled_address').toggle('show');
            });


            $('#edit_phone').on('click', function(event) {
                $('.toggled_phone').toggle('show');
            });


            $('#edit_email').on('click', function(event) {
                $('.toggled_email').toggle('show');
            });


        });

    </script>

@endsection