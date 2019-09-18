<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="description" content="This registries aim to create the first Mixed cohort study, retrospective and prospective cohort of patients with different rheumatic disorders from different governorates representing all of the Egyptian populations." />
    <meta name="keywords" content="Health,Arom,Rheumatology,scientific study,research,medical research, medical, joints" />
    <meta name="author" content="Arom Egypt registry" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{--<title>{{ config('app.name', 'Laravel') }}</title>--}}
    <title>@yield('title')</title>



    <!--===============================================================================================-->
    <!-- Favicon and Touch Icons -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('images/icons/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('images/icons/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/icons/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images/icons/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/icons/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('images/icons/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('images/icons/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('images/icons/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/icons/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('images/icons/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/icons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('images/icons/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/icons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('images/icons/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#00a3c8">
    <meta name="msapplication-TileImage" content="{{ asset('images/icons/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">
    <!--===============================================================================================-->
    <!-- Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/jquery-ui.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/css-plugin-collections.css') }}" rel="stylesheet"/>
    <!-- CSS | menuzord megamenu skins -->
    <link id="menuzord-menu-skins" href="{{ asset('css/menuzord-skins/menuzord-boxed.css') }}" rel="stylesheet"/>
    <!-- CSS | Main style file -->
    <link href="{{ asset('css/style-main.css') }}" rel="stylesheet" type="text/css">
    <!-- CSS | Preloader Styles -->
    <link href="{{ asset('css/preloader.css') }}" rel="stylesheet" type="text/css">
    <!-- CSS | Custom Margin Padding Collection -->
    <link href="{{ asset('css/custom-bootstrap-margin-padding.css') }}" rel="stylesheet" type="text/css">
    <!-- CSS | Responsive media queries -->
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" type="text/css">


    @yield('style')
    <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">

    <!-- Revolution Slider 5.x CSS settings -->
    <link  href="{{ url('js/revolution-slider/css/settings.css') }}" rel="stylesheet" type="text/css"/>
    <link  href="{{ url('js/revolution-slider/css/layers.css') }}" rel="stylesheet" type="text/css"/>
    <link  href="{{ url('js/revolution-slider/css/navigation.css') }}" rel="stylesheet" type="text/css"/>

    <!-- CSS | Theme Color -->
    <link href="{{ asset('css/colors/theme-skin-blue.css') }}" rel="stylesheet" type="text/css">

    <!-- Fonts | Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow|Crete+Round|Lobster|Abel|Roboto+Mono|Titillium+Web|Ubuntu|Varela+Round|Work+Sans&display=swap" rel="stylesheet">


    <!--===============================================================================================-->
    <!-- external javascripts -->
    <script src="{{ url('js/jquery-2.2.0.min.js') }}"></script>
    <script src="{{ url('js/jquery-ui.min.js') }}"> </script>
    <script src="{{ url('js/bootstrap.min.js') }}"></script>
    <!-- JS | jquery plugin collection for this theme -->
    <script src="{{ url('js/jquery-plugin-collection.js') }}" ></script>


    <!-- Revolution Slider 5.x SCRIPTS -->
    <script src="{{ url('js/revolution-slider/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ url('js/revolution-slider/js/jquery.themepunch.revolution.min.js') }}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js" defer></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js" defer></script>
    <![endif]-->



    @yield('top_script')

    <!-- Scripts -->
    {{--<script src="{{ asset('js/app.js') }}" defer></script>--}}

    {{--<!-- Fonts -->--}}
    {{--<link rel="dns-prefetch" href="//fonts.gstatic.com">--}}
    {{--<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">--}}

    <!-- Styles -->
    {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
</head>
{{--<body class="fullwidth-page">--}}
<body class="{{(Request::route()
                && (Request::route()->getName() == 'projectsIndex'
                || Request::route()->getName() == 'profileIndex'
                || Request::route()->getName() == 'profileGetMyProfile'
                || Request::route()->getName() == 'casesAddCase'
                || Request::route()->getName() == 'casesAddProjectCase'
                || Request::route()->getName() == 'casesUpdateProjectCase'
                || Request::route()->getName() == 'casesIndex'
                || Request::route()->getName() == 'usersIndex'))?
                'vertical-nav':''
            }}">


@if (Request::route()
&& Request::route()->getName() != 'homeIndex')
    <div class="body-overlay"></div>
@endif



<!-- Nav bar -->





<div id="wrapper" class="clearfix">
    <!-- preloader -->
    <div id="preloader">
        <div id="spinner">
            <img src="{{asset('images/preloaders/1.gif')}}" alt="">
        </div>
        <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
    </div>

    <!-- if page 404 -->
    @if(isset($exception)
    && method_exists($exception, 'getStatusCode')
    && $exception->getStatusCode() == 404)
        @include('templates.main_header')
    @endif



    @if (Request::route()
    && Request::route()->getName() != 'login'
    && Request::route()->getName() != 'register'
    && Request::route()->getName() != 'projectsIndex'
    && Request::route()->getName() != 'profileIndex'
    && Request::route()->getName() != 'profileGetMyProfile'
    && Request::route()->getName() != 'usersIndex'
    && Request::route()->getName() != 'casesIndex'
    && Request::route()->getName() != 'casesAddCase'
    && Request::route()->getName() != 'casesAddProjectCase'
    && Request::route()->getName() != 'casesUpdateProjectCase'
    && Request::route()->getName() != 'password.request'
    && Request::route()->getName() != 'password.reset'
    && !isset($exception))
        @include('templates.main_header')
    @elseif(Request::route()
    && ( Request::route()->getName() == 'login'
    || Request::route()->getName() == 'password.request'
    || Request::route()->getName() == 'password.reset'
    || Request::route()->getName() == 'register')
    && !isset($exception))
    @else
        @include('templates.projects_header')
    @endif

    @yield('content')
    @include('hiddens.global')

    @if (Request::route()
    && Request::route()->getName() != 'login'
    && Request::route()->getName() != 'register'
    && Request::route()->getName() != 'casesAddCase'
    && Request::route()->getName() != 'casesAddProjectCase'
    && Request::route()->getName() != 'casesUpdateProjectCase'
    && Request::route()->getName() != 'projectsIndex'
    && Request::route()->getName() != 'profileIndex'
    && Request::route()->getName() != 'profileGetMyProfile'
    && Request::route()->getName() != 'usersIndex'
    && Request::route()->getName() != 'casesIndex'
    && Request::route()->getName() != 'password.request'
    && Request::route()->getName() != 'password.reset'
    && !isset($exception))
        @include('templates.main_footer')
    @elseif(Request::route()
    && ( Request::route()->getName() == 'login'
    || Request::route()->getName() == 'register'
    || Request::route()->getName() == 'casesAddCase'
    || Request::route()->getName() == 'casesAddProjectCase'
    || Request::route()->getName() == 'casesUpdateProjectCase'
    || Request::route()->getName() == 'password.request'
    || Request::route()->getName() == 'password.reset'
    )
    && !isset($exception))
    @else
        @include('templates.projects_footer')
        @include('templates.projects_modals')
    @endif



    <script src="{{url('js/custom.js')}}"></script>
@yield('script')




</body>
</html>
