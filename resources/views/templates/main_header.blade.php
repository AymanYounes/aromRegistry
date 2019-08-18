
    <!-- Header -->
    <header id="header" class="header">

        <!-- Header social section -->
        <div class="header-top bg-theme-colored sm-text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="widget no-border m-0">
                            <ul class="social-icons icon-dark icon-theme-colored icon-sm sm-text-center">
                                <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="widget no-border m-0">
                            <ul class="list-inline pull-right flip sm-pull-none sm-text-center mt-5">
                                <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-white"></i> <a class="text-white" href="#">123-456-789</a> </li>
                                <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-white"></i> <a class="text-white" href="mail:support@aromegyregistry.com">support@aromegyregistry.com</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Header main nav -->
        <div class="header-nav navbar-fixed-top header-dark navbar-white navbar-sticky-animated animated-active">
            <div class="header-nav-wrapper">
                <div class="container">
                    <nav id="menuzord-right" class="menuzord blue">
                        <a class="menuzord-brand pull-left flip" href="javascript:void(0)">
                            <img src="images/logo-0-wide-small.png" alt="">
                        </a>
                        <ul class="menuzord-menu onepage-nav">
                            <li class="active"><a href="#home">Home</a> </li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#projects">Projects</a></li>
                            <li><a href="#time_plan">Time Plan</a></li>
                            <li><a href="#team">Team</a></li>
                            <li><a href="#sponsers">sponsers</a></li>

                            @if (Auth::check())
                            <li class="ml-lg-10 ml-md-10 ml-xs-0 mt-xs-10 ">
                                <div class="widget no-border m-0">
                                    <a class="btn btn-colored btn-flat btn-theme-colored w-100"  href="{{url('/projects')}}">Projects</a>
                                </div>
                            </li>
                            <li class="ml-lg-5 ml-md-5 ml-xs-0 mt-xs-10 ">
                                <div class="widget no-border m-0">
                                    <a class="btn btn-colored btn-flat btn-theme-colored btn-black-colored w-100"  href="{{url('/my-profile')}}">Profile</a>
                                </div>
                            </li>
                            @else

                            <li class="ml-lg-10 ml-md-10 ml-xs-0 mt-xs-10 ">
                                <div class="widget no-border m-0">
                                    <a class="btn btn-colored btn-flat btn-theme-colored w-100"  href="{{url('login')}}">Login</a>
                                </div>
                            </li>
                                <li class="ml-lg-5 ml-md-5 ml-xs-0 mt-xs-10 ">
                                    <div class="widget no-border m-0">
                                        <a class="btn btn-colored btn-flat btn-theme-colored btn-black-colored w-100"  href="{{url('register')}}">Sign up</a>
                                    </div>
                                </li>

                            @endif
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

    </header>