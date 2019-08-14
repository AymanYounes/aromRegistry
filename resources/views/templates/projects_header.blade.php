
<!-- Header -->
<header id="header" class="projects_header header layer-overlay overlay-white-1" data-bg-img="{{asset('images/side-bg.jpg')}}">
    <div class="header-nav">
        <div class="header-nav-wrapper">
            <div class="container-fluid p-0">
                <div id="menuzord-verticalnav" class="menuzord blue">
                    <a class="menuzord-brand p-30" href="javascript:void(0)"><img width="200" alt="logo" src="{{asset('images/logo-0-wide-white.png')}}"></a>
                    <ul class="menuzord-menu">
                        <li><a class="text-white" href="{{url('/')}}">Home</a> </li>
                        <li class="{{(Request::route()&& Request::route()->getName() == 'projectsIndex')?'active':''}}"><a class="text-white" href="{{url('/projects')}}">projects</a> </li>
                        <li class="{{(Request::route()&& Request::route()->getName() == 'profileIndex')?'active':''}}"><a class="text-white" href="{{url('/profile')}}">My profile</a> </li>
                        <li class="{{(Request::route()&& ( Request::route()->getName() == 'casesIndex' || Request::route()->getName() == 'casesAddCase'))?'active':''}}"><a class="text-white" href="{{url('/cases')}}">My cases</a> </li>
                        <li class=""><a class="text-white" href="{{url('/logout')}}">Log out</a> </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
                <div class="vertical-nav-widget p-30 pt-10">
                    <div class="widget no-border">
                        <ul>
                            <li class="font-14 mb-5"> <i class="fa fa-phone mr-5 text-white"></i> <a class="text-white" href="tel:123456789">123-456-789</a> </li>
                            <li class="font-14 mb-5"> <i class="fa fa-envelope-o mr-5 text-white"></i> <a class="text-white" href="mail:support@aromegyregistry.com">support@aromegyregistry.com</a> </li>
                        </ul>
                    </div>
                    <div class="widget projects-social">
                        <ul class="styled-icons icon-dark icon-theme-colored icon-sm">
                            <li><a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <p style="position: absolute;bottom: 20px; margin:0 20px;color:white">Copyright &copy;2019 Arom Egypt Registry</p>
</header>


<!-- mobile nav -->
<section id="humborger_nav">
    <div class="top">
        <div class="navbar">
            <div class="navbar__menu">
                <a href="" class="mb-40"><img src="{{asset('images/logo-0-wide-white.png')}}" width="100px;" ></a>

                <a class="navbar__item navbar__link" href="{{url('/')}}">Home</a>
                <a class="navbar__item navbar__link" href="{{url('/projects')}}">Projects</a>
                <a class="navbar__item navbar__link" href="{{url('/profile')}}">My profile</a>
                <a class="navbar__item navbar__link" href="{{url('/cases')}}">My cases</a>
                <a class="navbar__item navbar__link" href="{{url('/logout')}}">Log out</a>


                <div class="widget projects-social mt-30">
                    <ul class="styled-icons icon-dark icon-theme-colored icon-sm">
                        <li><a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                </div>

                <div class="nav-copy-right">
                    <p style="">Copyright &copy;2019 Arom Egypt Registry</p>
                </div>

            </div>


            <div class="trigger hamburger hamburger--collapse" id="js-navbar-toggle">
                <svg class="bars" viewBox="0 0 100 100" onclick="this.classList.toggle('active')">
                    <path class="line top" d="m 30,33 h 40 c 13.100415,0 14.380204,31.80258 6.899646,33.421777 -24.612039,5.327373 9.016154,-52.337577 -12.75751,-30.563913 l -28.284272,28.284272"></path>
                    <path class="line middle" d="m 70,50 c 0,0 -32.213436,0 -40,0 -7.786564,0 -6.428571,-4.640244 -6.428571,-8.571429 0,-5.895471 6.073743,-11.783399 12.286435,-5.570707 6.212692,6.212692 28.284272,28.284272 28.284272,28.284272"></path>
                    <path class="line bottom" d="m 69.575405,67.073826 h -40 c -13.100415,0 -14.380204,-31.80258 -6.899646,-33.421777 24.612039,-5.327373 -9.016154,52.337577 12.75751,30.563913 l 28.284272,-28.284272"></path>
                </svg>
            </div>
        </div>
    </div>





</section>