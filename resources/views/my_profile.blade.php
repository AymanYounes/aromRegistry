@extends('layouts.app')
@section('title')Arom Egypt registry | Profile @endsection

@section('style')
    <style>

        .toggled_image,.toggled_password,.toggled_name,.toggled_title,.toggled_address,.toggled_phone,.toggled_email{
            display: none;
        }

        #edit_image{
            position: absolute;
            right: 0;
            margin-bottom: -100px;
            /*background: rgba(0,0,0,0.1);*/
            padding: 7px;
            z-index: 99;
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
                                <li><a href="{{url('/')}}">Home</a></li>
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
                                <a href="javascript:void(0)" id="edit_image" class="can-edit" data-toggle="toggled_image">
                                    <i class="fa fa-edit fa-2x"></i>
                                </a>

                                <div id="image_wrapper">
                                    @if(Auth::user()->image)
                                        <img src="{{asset(Auth::user()->image)}}" class="img-thumbnail" alt="">
                                    @else
                                        <img src="{{asset('images/default-user.png')}}" alt="">
                                    @endif
                                </div>

                                <div class="toggled_image">

                                    <div class="form-message" style="display: none;">
                                        
                                    </div>

                                    <form class="profile_form" id="image_form" action="#" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="form-group col-sm-12">
                                                <input type="file" required class="form-control" name="image" placeholder="title">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-sm-12">
                                                <button type="submit" class="btn btn-primary form-control">Update</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                            <ul class="social-icons icon-gray mt-15 mb-15">
                                {{--<li><a href="#"><i class="fa fa-facebook"></i></a></li>--}}
                                {{--<li><a href="#"><i class="fa fa-skype"></i></a></li>--}}
                                {{--<li><a href="#"><i class="fa fa-twitter"></i></a></li>--}}
                                {{--<li><a href="#"><i class="fa fa-linkedin"></i></a></li>--}}
                                {{--<li><a href="#"><i class="fa fa-google-plus"></i></a></li>--}}
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-8 col-md-8 pull-right pl-60 pl-sm-15">
                            <div>
                                <a href="javascript:void(0)" style="float: right" id="edit_name" class="can-edit"  data-toggle="toggled_name"><i class="fa fa-edit"></i></a>
                                <h3 id="profile_name">
                                    {{(Auth::user()->name)?Auth::user()->name:'You did not add your name yet' }}
                                </h3>

                                <div class="toggled_name">

                                    <div class="form-message" style="display: none;">

                                    </div>

                                    <form class="profile_form" id="name_form" action="#" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <input type="text" required value="{{(Auth::user()->name)?Auth::user()->name:'' }}" name="name" class="form-control" placeholder="Name">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <button type="submit" class="btn btn-primary">Update</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>


                                <a style="float: right" id="edit_title" class="can-edit" data-toggle="toggled_title"><i class="fa fa-edit"></i></a>
                                <h5 id="profile_title" class="text-theme-colored">
                                    {{(Auth::user()->title)?Auth::user()->title:'You did not add your title yet' }}
                                </h5>
                                <div class="toggled_title">

                                    <div class="form-message" style="display: none;">

                                    </div>

                                    <form class="profile_form" id="title_form" action="#" method="post" enctype="multipart/form-data">

                                        @csrf
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <input type="text" name="title" value="{{(Auth::user()->title)?Auth::user()->title:'' }}" class="form-control" placeholder="title">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <button type="submit" class="btn btn-primary">Update</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                            <div class="mt-30">
                                <dl class="dl-horizontal doctor-info">

                                    <dt>Address</dt>
                                    <dd>
                                        <span id="profile_address">
                                            {{(Auth::user()->address)?Auth::user()->address:'You did not add your address yet' }}
                                        </span>

                                        <a style="float: right" id="edit_address" class="can-edit" data-toggle="toggled_address"><i class="fa fa-edit"></i></a>

                                    </dd>

                                    <div class="toggled_address">

                                        <div class="form-message" style="display: none;">

                                        </div>

                                        <form class="profile_form" id="address_form" action="#" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    {{--<label>Address</label>--}}
                                                    <input type="text" name="address" required class="form-control" value="{{(Auth::user()->address)?Auth::user()->address:'' }}" placeholder="Address">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <hr>

                                    <dt>Phone</dt>
                                    <dd>
                                        <span id="profile_phone">
                                            {{(Auth::user()->phone)?Auth::user()->phone:'You did not add your phone yet' }}
                                        </span>

                                        <a style="float: right" id="edit_phone" class="can-edit" data-toggle="toggled_phone"><i class="fa fa-edit"></i></a>

                                    </dd>
                                    <div class="toggled_phone">

                                        <div class="form-message" style="display: none;">

                                        </div>

                                        <form class="profile_form" id="phone_form" action="#" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    {{--<label>Phone</label>--}}
                                                    <input type="text" name="phone" required value="{{(Auth::user()->phone)?Auth::user()->phone:'' }}" class="form-control" placeholder="Phone">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                    <hr>
                                    <dt>Email</dt>
                                    <dd>

                                        <span id="profile_email">
                                            {{(Auth::user()->email)?Auth::user()->email:'You did not add your email yet' }}
                                        </span>
                                        <a style="float: right" id="edit_email" class="can-edit" data-toggle="toggled_email"><i class="fa fa-edit"></i></a>
                                    </dd>
                                    <div class="toggled_email">

                                        <div class="form-message" style="display: none;">

                                        </div>

                                        <form class="profile_form" id="email_form" action="#" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    {{--<label>Email</label>--}}
                                                    <input disabled type="email" name="email" required value="{{(Auth::user()->email)?Auth::user()->email:'' }}"  class="form-control" placeholder="Email">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    {{--<button type="submit" class="btn btn-primary">Update</button>--}}
                                                </div>
                                            </div>


                                        </form>
                                    </div>
                                    <hr>
                                    <dt>Password</dt>
                                    <dd>
                                        <a href="javascript:void(0)" id="change_password" data-toggle="toggled_password" class="text-theme-colored can-edit">Change Password</a>
                                    </dd>
                                    <div class="toggled_password">
                                        <div class="form-message" style="display: none;">

                                        </div>

                                        <form class="profile_form" id="password_form" action="#" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label>Password</label>
                                                    <input type="password" required name="password" class="form-control">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Confirm Password</label>
                                                    <input type="password" required name="confirm-password" class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Update</button>
                                            </div>
                                        </form>
                                    </div>
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

            $('.can-edit').on('click', function(event) {
                var toggle = $(this).data('toggle');
                $('.'+toggle).toggle('show');
            });



            $('.profile_form').on('submit',function (e){
                e.preventDefault();
                $.ajax({
                    url: $("#RootURL").val()+'/profile-update',
                    data: new FormData(this),
                    type: "POST",
                    dataType: "json",
                    contentType: false,
                    cache: false,
                    processData: false,
                    async: false,
                    success: function (result) {

                        var className = '.toggled_'+result.section;

                            $(className).find('.form-message').show();
                            $(className).find('.form-message').html(result.message);
                            $(className).find('.form-message').addClass(result.class_name);
                            $(className).find('.form-message').css('color',result.style_color);
                            if(result.updated_section != '' && className == '.toggled_image'){
                                $('#image_wrapper').html(result.updated_section);
                            }

                            if(result.updated_section != '' && className == '.toggled_name'){
                                $('#profile_name').html(result.updated_section);
                            }

                            if(result.updated_section != '' && className == '.toggled_title'){
                                $('#profile_title').html(result.updated_section);
                            }

                            if(result.updated_section != '' && className == '.toggled_address'){
                                $('#profile_address').html(result.updated_section);
                            }

                            if(result.updated_section != '' && className == '.toggled_phone'){
                                $('#profile_phone').html(result.updated_section);
                            }

                            if(result.updated_section != '' && className == '.toggled_email'){
                                $('#profile_email').html(result.updated_section);
                            }




                            if(result.status == 'pass'){
                                $(className).hide('slow');
                            }



                    }
                });


            });


        });

    </script>

@endsection