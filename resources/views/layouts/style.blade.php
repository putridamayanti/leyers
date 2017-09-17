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
    <link rel="stylesheet" type="text/css" href="/css/datepicker.min.css">
    <link rel="stylesheet" type="text/css" href="/css/nice-select.css">
    <link rel="stylesheet" type="text/css" href="/css/sweetalert.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">

    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
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
    <script>
        $(document).ready(function () {
            $("select").niceSelect();

            Waves.init();
            Waves.attach('.button', ['waves-float']);
        });
    </script>
</head>
<body class="bg-lgrey">
<!-- --- Header Section --- -->
<section id="header" class="bg-black">
    <div class="wrapper1">
        <div class="row">
            <div class="col-sm-2">
                <a href="/"><img src="image/Logo-white.png" class="w70 m10 ml20"></a>
            </div>
            <div class="col-sm-4 pull-right">
                <ul class="roboto">
                    @if(Auth::check())
                        <li><a class="txt-white pull-right" href="/home">Home</a></li>
                    @else
                        <li><a class="txt-white pull-right" href="/register">Join Us</a></li>
                        <li><a class="txt-white pull-right" href="/login">Sign In</a></li>
                    @endif

                </ul>
            </div>
        </div>
    </div>
</section>
<!-- --- End Header Section --- -->

<!-- --- Content Section --- -->
<section id="content">
    <div class="wrapper1">
        <div class="row">

            @yield('content')

        </div>
    </div>
</section>
<!-- --- End Content Section --- -->
{{--<section id="footer" class="roboto">--}}
{{--<p class="f12">Copyright@2017Leyers.com</p>--}}
{{--</section>--}}
</body>
</html>