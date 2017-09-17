<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Leyers - Color Your Life</title>

    <link href="/image/favicon.png" rel="shortcut icon">

    <!--CSS-->

    <link rel="stylesheet" type="text/css" href="/css/waves.css">
    <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap-colorpicker.css">
    <link rel="stylesheet" type="text/css" href="/css/datepicker.min.css">
    <link rel="stylesheet" type="text/css" href="/css/nice-select.css">
    <link rel="stylesheet" type="text/css" href="/css/sweetalert.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">

    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600|Raleway:200,500,600" rel="stylesheet">

    <!--Javascript-->
    <script type="text/javascript" src="/js/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/leyers.js"></script>
    <script type="text/javascript" src="/js/datepicker.min.js"></script>
    <script type="text/javascript" src="/js/datepicker.en.js"></script>
    <script type="text/javascript" src="/js/sweetalert.min.js"></script>
    <script type="text/javascript" src="/js/jquery.nice-select.min.js"></script>
    <script type="text/javascript" src="/js/waves.js"></script>
    <script type="text/javascript" src="/js/bootstrap-colorpicker.js"></script>
    <script>
        $(document).ready(function () {
            $("select").niceSelect();

            Waves.init();
            Waves.attach('button', ['waves-float']);
            Waves.attach('li a', ['waves-float']);

            $('.color-picker').colorpicker({
                customClass: 'colorpicker-2x',
                sliders: {
                    saturation: {
                        maxLeft: 200,
                        maxTop: 200
                    },
                    hue: {
                        maxTop: 200
                    },
                    alpha: {
                        maxTop: 200
                    }
                }
            });

            $('.menu').on('click', function () {
                $(this).children('.submenu').slideToggle(500);
//                $('.submenu').slideToggle(500);
            });
            $('.menu-profile').on('click', function () {
                $('.profile').slideToggle(500);
            });
        });
    </script>
</head>
<body style="background: #e5e7e8">
<section class="header clearfix">
    <div class="logo bg-black">
        <a href="/"><img src="/image/Logo-white.png" class="w60"></a>
    </div>
    <div class="menu-header bg-white">
        <div class="wrapper">
            <div class="row">
                <div class="col-sm-2 pull-right">
                    <ul>
                        <li class="menu-profile">
                            <a href="#" class="txt-grey" style="box-shadow: none">
                                {{ Auth::user()->name }}
                                <img src="/image/Me.jpg" class="img-circle w30">
                            </a>
                            <ul class="profile">
                                <li><a href=""><i class="fa fa-user-md pr15"></i> Profile</a></li>
                                <li><a href=""><i class="fa fa-gear pr15"></i> Setting</a></li>
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out pr15"></i>
                                        Sign Out

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="left-content">
    <ul>
        <li><a href="/home"><i class="fa fa-home pr10"></i> Dashboard </a></li>
        <li class="menu">
            <a href="#"><i class="fa fa-eyedropper pr10"></i> Color <i class="fa fa-caret-down pull-right"></i></a>
            <ul class="submenu">
                <li><a href="/user/color"><i class="fa fa-adjust pr10"></i> Color  </a></li>
                <li><a href="/home"><i class="fa fa-clone pr10"></i> Palettes </a></li>
            </ul>
        </li>
        <li><a href="/home"><i class="fa fa-heart pr10"></i> Pattern </a></li>
        @if(Auth::user()->id == 1)
            <li><a href="/users"><i class="fa fa-user pr10"></i> User </a></li>
            <li><a href="/categories"><i class="fa fa-filter pr10"></i> Category </a></li>
            <li class="menu">
                <a href="#" ><i class="fa fa-heartbeat pr10"></i> Activity <i class="fa fa-caret-down pull-right"></i> </a>
                <ul class="submenu">
                    <li><a href="/activity"><i class="fa fa-bicycle pr10"></i>Activity</a></li>
                    <li><a href="/category-activity"><i class="fa fa-bookmark pr15"></i>Category</a></li>
                </ul>
            </li>
        @endif
    </ul>
</section>
{{--<section id="header" class="bg-black txt-white">--}}
    {{--<div class="wrapper2">--}}
        {{--<div class="row">--}}
            {{--<div class="col-sm-2">--}}
                {{--<a href="/home"><img src="/image/Logo-white.png" class="w70 mt10 ml20"></a>--}}
            {{--</div>--}}
            {{--<div class="col-sm-6 col-sm-offset-4">--}}
                {{--<ul class="roboto ml20 clearfix">--}}
                    {{--<li><a class="txt-white" href="">Illustrations</a></li>--}}
                    {{--<li><a class="txt-white" href="">Vectors</a></li>--}}
                    {{--<li><a class="txt-white" href="">Photos</a></li>--}}
                    {{--<li class="dropdown">--}}
                        {{--@if(Auth::user()->fullname != null)--}}
                            {{--<a class="txt-white roboto dropbtn" onclick="myFunction()" href="#">{{ Auth::user()->fullname }} <i class="fa fa-caret-down ml20"></i></a>--}}

                        {{--@else--}}
                            {{--<a class="txt-white roboto dropbtn" onclick="myFunction()" href="#">{{ Auth::user()->name }} <i class="fa fa-caret-down ml20"></i></a>--}}
                        {{--@endif--}}
                        {{--<ul id="myDropdown" class="dropdown-content pull-right">--}}
                            {{--<li><a href="/setting">Settings</a></li>--}}
                            {{--<li>--}}
                                {{--<a href="{{ route('logout') }}"--}}
                                {{--onclick="event.preventDefault();--}}
                                {{--document.getElementById('logout-form').submit();">--}}
                                    {{--Sign Out--}}
                                {{--</a>--}}

                                {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                                    {{--{{ csrf_field() }}--}}
                                {{--</form>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</section>--}}

{{--<section id="subheader">--}}
    {{--<div class="wrapper1">--}}
        {{--<div class="row">--}}
            {{--<div class="col-sm-5">--}}
                {{--<ul>--}}
                    {{--<li><a href="/profile">Profile</a></li>--}}
                    {{--<li><a href="/payment">Payment</a></li>--}}
                    {{--@if(Auth::user()->role_id == 1)--}}
                        {{--<li><a href="">Activities</a></li>--}}
                        {{--<li><a href="/users">Users</a></li>--}}
                        {{--<li><a href="/images">Images</a></li>--}}
                    {{--@endif--}}
                {{--</ul>--}}
                {{--<div class="row">--}}

                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-sm-2 pull-right">--}}
                {{--@if(Auth::user()->fullname != null)--}}
                    {{--<p class="center"><strong>Hi, {{ Auth::user()->fullname }}</strong></p>--}}
                {{--@else--}}
                    {{--<p class="center"><strong>Hi, {{ Auth::user()->name }}</strong></p>--}}
                {{--@endif--}}

            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</section>--}}

<section class="content">
    <div class="row">

        @yield('content')

    </div>
</section>

{{--<section id="footer" class="roboto">--}}
    {{--<p class="f12">Copyright@2017Leyers.com</p>--}}
{{--</section>--}}
</body>
</html>
{{--<!DOCTYPE html>--}}
{{--<html lang="{{ app()->getLocale() }}">--}}
{{--<head>--}}
    {{--<meta charset="utf-8">--}}
    {{--<meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
    {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}

    {{--<!-- CSRF Token -->--}}
    {{--<meta name="csrf-token" content="{{ csrf_token() }}">--}}

    {{--<title>{{ config('app.name', 'Laravel') }}</title>--}}

    {{--<!-- Styles -->--}}
    {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
{{--</head>--}}
{{--<body>--}}
    {{--<div id="app">--}}
        {{--<nav class="navbar navbar-default navbar-static-top">--}}
            {{--<div class="container">--}}
                {{--<div class="navbar-header">--}}

                    {{--<!-- Collapsed Hamburger -->--}}
                    {{--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">--}}
                        {{--<span class="sr-only">Toggle Navigation</span>--}}
                        {{--<span class="icon-bar"></span>--}}
                        {{--<span class="icon-bar"></span>--}}
                        {{--<span class="icon-bar"></span>--}}
                    {{--</button>--}}

                    {{--<!-- Branding Image -->--}}
                    {{--<a class="navbar-brand" href="{{ url('/') }}">--}}
                        {{--{{ config('app.name', 'Laravel') }}--}}
                    {{--</a>--}}
                {{--</div>--}}

                {{--<div class="collapse navbar-collapse" id="app-navbar-collapse">--}}
                    {{--<!-- Left Side Of Navbar -->--}}
                    {{--<ul class="nav navbar-nav">--}}
                        {{--&nbsp;--}}
                    {{--</ul>--}}

                    {{--<!-- Right Side Of Navbar -->--}}
                    {{--<ul class="nav navbar-nav navbar-right">--}}
                        {{--<!-- Authentication Links -->--}}
                        {{--@if (Auth::guest())--}}
                            {{--<li><a href="{{ route('login') }}">Login</a></li>--}}
                            {{--<li><a href="{{ route('register') }}">Register</a></li>--}}
                        {{--@else--}}
                            {{--<li class="dropdown">--}}
                                {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">--}}
                                    {{--{{ Auth::user()->name }} <span class="caret"></span>--}}
                                {{--</a>--}}

                                {{--<ul class="dropdown-menu" role="menu">--}}
                                    {{--<li>--}}
                                        {{--<a href="{{ route('logout') }}"--}}
                                            {{--onclick="event.preventDefault();--}}
                                                     {{--document.getElementById('logout-form').submit();">--}}
                                            {{--Logout--}}
                                        {{--</a>--}}

                                        {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                                            {{--{{ csrf_field() }}--}}
                                        {{--</form>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                        {{--@endif--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</nav>--}}

        {{--@yield('content')--}}
    {{--</div>--}}

    {{--<!-- Scripts -->--}}
    {{--<script src="{{ asset('js/app.js') }}"></script>--}}
{{--</body>--}}
{{--</html>--}}
