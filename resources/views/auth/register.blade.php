<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Leyers - Color Your Life</title>

    <link href="/image/favicon.png" rel="shortcut icon">

    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="/css/waves.css">
    <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <link rel="stylesheet" type="text/css" href="/css/auth.css">

    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600|Raleway:200,500,600" rel="stylesheet">

    <!--Javascript-->
    <script type="text/javascript" src="/js/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/leyers.js"></script>
    <script type="text/javascript" src="/js/waves.js"></script>
    <script>
        $(document).ready(function () {
            Waves.init();
            Waves.attach('.button', ['waves-float']);
        })
    </script>
</head>
<body>
<div id="auth-page">
    <div class="gradient">
        <div class="auth-content">
            <div class="row">
                <div class="col-sm-6">
                    <div class="register">
                        <h2 class="center raleway mb20">REGISTER</h2>
                        <form class="form-auth" method="post" action="{{ route('register') }}">
                            {{ csrf_field() }}

                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="text" name="name" placeholder="Fullname" class="mb20" required>
                                    <input type="text" name="email" placeholder="Email Address" class="mb20" required>
                                    <input type="password" name="password" placeholder="Password" class="mb20" required>
                                    <input type="password" name="password_confirmation" placeholder="Confirm Password" class="mb20" required>
                                    <button class="btn btn-rounded btn-block btn-green center mb20 p10">Sign Up</button>
                                </div>
                            </div>
                        </form>
                        <p class="center">Already have account? <a href="/login">Sign In</a></p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="right-content right-register">
                        <a href="/"><img src="/image/Logo-white.png" width="50%" style="margin-left: 25%"></a>
                        <h5 class="center">Create your inspiration for design</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>