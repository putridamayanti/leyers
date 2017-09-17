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
        });
        $.ajax({
            type: 'GET',
            url: '/all-color',
            success: function (data) {
                console.log(data);

                $.each(data, function (index, element) {
                    console.log(data);
                    $('#user-color').append(
//                    <div class="col-sm-2">
//                        <a href="" data-toggle="modal" data-target=".show-color">
//                        <div class="box-color"></div>
//                        <p class="center montserrat mt10">Affordable</p>
//                        <p class="center raleway mb10 txt-lgreen">by <a href="" class="txt-red">Putri Damayanti</a></p>
//                    </a>
//                    </div>
                    );
                    $('.color'+element.color_id+'').css('background', element.hex);
                });
            }
        });
    </script>
</head>
<body>

<!-- --- Header Section --- -->
<section id="header">
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

<!-- --- Home Section --- -->
<section id="home">
    <div class="wrapper1">
        <div class="home-content">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <h1 class="montserrat txt-white f50">INSPIRATION OF ART</h1>
                    <h3 class="montserrat fw300 txt-white mt10" style="font-weight: lighter">Express Your Style Into Something New</h3>
                    <div class="col-sm-6 col-sm-offset-3 mt20">
                        <div class="search mb20">
                            <form>
                                <div class="row">
                                    <div class="col-sm-9">
                                        <input type="text" name="search" placeholder="Search">
                                    </div>
                                    <div class="col-sm-3">
                                        <button type="submit"><i class="fa fa-search"></i> </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <a href="/colors" class="button color mr-2 pull-left f16">Colors</a>
                        <a href="#" class="button btn-block pattern pull-right f16">Pattern</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- --- End Home Section --- -->

<!-- --- Most Color Section --- -->
<section id="color">
    <div class="wrapper1">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="montserrat title center">COLOR TREND</h1>
            </div>
            <div class="col-sm-2">
                <a href="" data-toggle="modal" data-target=".show-color">
                    <div class="box-color" style="background: #0EAD93"></div>
                    <p class="center montserrat mt10">Affordable</p>
                    <p class="center raleway mb10 txt-lgreen">by <a href="" class="txt-red">Putri Damayanti</a></p>
                </a>
            </div>
            <div class="col-sm-2">
                <a href="">
                    <div class="box-color" style="background: #5bc0de"></div>
                    <p class="center montserrat mt10">Affordable</p>
                    <p class="center raleway mb10 txt-lgreen">by <a href="" class="txt-red">Putri Damayanti</a></p>
                </a>
            </div>
            <div class="col-sm-2">
                <a href="">
                    <div class="box-color" style="background: #e4b9c0"></div>
                    <p class="center montserrat mt10">Affordable</p>
                    <p class="center raleway mb10 txt-lgreen">by <a href="" class="txt-red">Putri Damayanti</a></p>
                </a>
            </div>
            <div class="col-sm-2">
                <a href="">
                    <div class="box-color" style="background: #FF9A19"></div>
                    <p class="center montserrat mt10">Affordable</p>
                    <p class="center raleway mb10 txt-lgreen">by <a href="" class="txt-red">Putri Damayanti</a></p>
                </a>
            </div>
            <div class="col-sm-2">
                <a href="">
                    <div class="box-color" style="background: #faf2cc"></div>
                    <p class="center montserrat mt10">Affordable</p>
                    <p class="center raleway mb10 txt-lgreen">by <a href="" class="txt-red">Putri Damayanti</a></p>
                </a>
            </div>
            <div class="col-sm-2">
                <a href="">
                    <div class="box-color" style="background: #ffff00"></div>
                    <p class="center montserrat mt10">Affordable</p>
                    <p class="center raleway mb10 txt-lgreen">by <a href="" class="txt-red">Putri Damayanti</a></p>
                </a>
            </div>
        </div>
    </div>
</section>
<div class="modal fade show-color" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title montserrat">Color</h4>
            </div>
            <div class="modal-body">
                <div class="box-color"></div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-green save-color" value="add" data-dismiss="modal">Save</button>
                <button type="button" class="btn btn-red" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
<!-- --- End Most Color Section --- -->

<!-- --- Most Patterns Section --- -->
<section id="pattern">
    <div class="wrapper1">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="montserrat title center">MOST LIKELY PATTERN</h1>
            </div>
            <div class="col-sm-2">
                <a href="">
                    <div class="box-pattern"></div>
                    <p class="center montserrat mt10">Affordable</p>
                    <p class="center raleway mb10 txt-lgreen">by <a href="" class="txt-yellow"><strong>Putri Damayanti</strong></a></p>
                </a>
            </div>
            <div class="col-sm-2">
                <a href="">
                    <div class="box-pattern"></div>
                    <p class="center montserrat mt10">Affordable</p>
                    <p class="center raleway mb10 txt-lgreen">by <a href="" class="txt-yellow"><strong>Putri Damayanti</strong></a></p>
                </a>
            </div>
            <div class="col-sm-2">
                <a href="">
                    <div class="box-pattern"></div>
                    <p class="center montserrat mt10">Affordable</p>
                    <p class="center raleway mb10 txt-lgreen">by <a href="" class="txt-yellow"><strong>Putri Damayanti</strong></a></p>
                </a>
            </div>
            <div class="col-sm-2">
                <a href="">
                    <div class="box-pattern"></div>
                    <p class="center montserrat mt10">Affordable</p>
                    <p class="center raleway mb10 txt-lgreen">by <a href="" class="txt-yellow"><strong>Putri Damayanti</strong></a></p>
                </a>
            </div>
            <div class="col-sm-2">
                <a href="">
                    <div class="box-pattern"></div>
                    <p class="center montserrat mt10">Affordable</p>
                    <p class="center raleway mb10 txt-lgreen">by <a href="" class="txt-yellow"><strong>Putri Damayanti</strong></a></p>
                </a>
            </div>
            <div class="col-sm-2">
                <a href="">
                    <div class="box-pattern"></div>
                    <p class="center montserrat mt10">Affordable</p>
                    <p class="center raleway mb10 txt-lgreen">by <a href="" class="txt-yellow"><strong>Putri Damayanti</strong></a></p>
                </a>
            </div>
        </div>
    </div>
</section>

{{--<section id="subscribe">--}}
    {{--<div class="wrapper2">--}}
        {{--<div class="row">--}}
            {{--<div class="col-sm-8 col-sm-offset-2">--}}
                {{--<h1 class="montserrat title txt-white">JOIN US FOR FREE IMAGES</h1>--}}
                {{--<p class="txt-white roboto mb10">You Will Get Free Images By Entering Your Email</p>--}}
            {{--</div>--}}
            {{--<div class="col-sm-8 col-sm-offset-2">--}}
                {{--<form role="form" method="post" action="">--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-sm-10">--}}
                            {{--<input class="txt-white roboto" type="text" name="email" placeholder="Your Email Address">--}}
                        {{--</div>--}}
                        {{--<div class="col-sm-2">--}}
                            {{--<button class="bg-lgrey roboto" type="submit">Submit</button>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</form>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</section>--}}

<section id="contact">
    <div class="wrapper2">
        <div class="row">
            <div class="col-sm-6">
                <div class="col-sm-5">
                    <img class="w100" src="image/Logo-white.png">
                    <h4 class="roboto txt-white mt10">Follow Us</h4>
                    <div class="icon">
                        <a href="" class="icon txt-white">
                            <i class="fa fa-google-plus-square"></i>
                        </a>
                        <a href="" class="icon txt-white ml20">
                            <i class="fa fa-pinterest-square"></i>
                        </a>
                        <a href="" class="icon txt-white ml20">
                            <i class="fa fa-facebook-square"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="col-sm-6">
                    <h4 class="txt-white mt10">LEYERS.COM</h4><br>
                    <a href="" class="txt-white roboto">About Us</a><br>
                    <a href="" class="txt-white roboto">Term & Condition</a><br>
                    <a href="" class="txt-white roboto">Contact Us</a><br>
                </div>
                <div class="col-sm-6">
                    <h4 class="txt-white mt10">INFORMATION</h4><br>
                    <a href="" class="txt-white roboto">Payment</a><br>
                    <a href="" class="txt-white roboto">Become Designer</a><br>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>