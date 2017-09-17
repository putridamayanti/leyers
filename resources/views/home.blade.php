@extends('layouts.app')

@section('content')
    <script>
        $.ajax({
            type: 'GET',
            url: '/all-color',
            success: function (data) {
                console.log(data);

                $.each(data, function (index, element) {
                    console.log(data);
                    $('#all-color').append(
                    '<div class="col-sm-3">'+
                        '<div class="thumbnail">'+
                        '<a href=""><div class="box-color color'+element.color_id+'"></div></a>'+
                        '<p class="w50 pull-left mt10 txt-grey f12">HEX '+element.hex+'</p>'+
                        '<p class="w50 pull-right mt10 txt-grey f12 right">RGB '+element.rgb+'</p>'+
                        '<p class="center montserrat mt10"><a href="">'+element.title+'</a> </p>'+
                        '<p class="center raleway txt-lgreen f11">by <a href="" class="txt-red f11">'+element.user.fullname+'</a></p>'+
                        '<p class="center txt-grey f12">'+
                        '<i class="fa fa-heart pr5"></i>12'+
                        '<i class="fa fa-comment pr5 ml10"></i>4'+
                        '</p>'+
                        '</div>'+
                    '</div>'
                    );
                    $('.color'+element.color_id+'').css('background', element.hex);
                });
            }
        });
    </script>
    <div class="col-sm-12">
        <div class="content-heading">
            <h3 class="montserrat">Dashboard</h3>
            <p class="txt-grey">Welcome To <a href="/" class="txt-green">Leyers</a> . Enjoy your design surfing.</p>
        </div>
    </div>
    @if(Auth::user()->role_id == 1)
        <div class="col-sm-3">
            <div class="box">
                <div class="row">
                    <div class="col-sm-4">
                        <i class="fa fa-users f40 p30"></i>
                    </div>
                    <div class="col-sm-8">
                        <h3 class="montserrat txt-green center mt20">9066</h3>
                        <h5 class="montserrat mt20 mb20 center">Total Users</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="box">
                <div class="row">
                    <div class="col-sm-4">
                        <i class="fa fa-clone f40 p30"></i>
                    </div>
                    <div class="col-sm-8">
                        <h3 class="montserrat txt-red center mt20">9066</h3>
                        <h5 class="montserrat mt20 mb20 center">Total Color</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="box">
                <div class="row">
                    <div class="col-sm-4">
                        <i class="fa fa-adjust f40 p30"></i>
                    </div>
                    <div class="col-sm-8">
                        <h3 class="montserrat txt-yellow center mt20">9066</h3>
                        <h5 class="montserrat mt20 mb20 center">Total Palettes</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="box">
                <div class="row">
                    <div class="col-sm-4">
                        <i class="fa fa-heart f40 p30"></i>
                    </div>
                    <div class="col-sm-8">
                        <h3 class="montserrat txt-grey center mt20">9066</h3>
                        <h5 class="montserrat mt20 mb20 center">Total Pattern</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="box">
                <h4 class="montserrat mb20">Latest Color</h4>
                <div class="row" id="all-color">
                    {{--@foreach($color as $item)--}}
                        {{--<div class="col-sm-3">--}}
                            {{--<div class="thumbnail">--}}
                                {{--<a href=""><div class="box-color color{{ $item->color_id }}"></div></a>--}}
                                {{--<p class="w50 pull-left mt10 txt-grey f12">HEX {{ $item->hex }}</p>--}}
                                {{--<p class="w50 pull-right mt10 txt-grey f12 right">RGB {{ $item->rgb }}</p>--}}
                                {{--<a href=""><p class="center montserrat mt10 mb10">{{ $item->title }}</p></a>--}}
                                {{--<p class="center txt-grey mr10 mt5">--}}
                                    {{--<i class="fa fa-heart pr5"></i>12--}}
                                    {{--<i class="fa fa-comment pr5 ml10"></i>4--}}
                                {{--</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--@endforeach--}}
                </div>
            </div>
        </div>
    @else
        <div class="col-sm-12">
            <div class="box">
                <h4 class="montserrat mb20">Color Trends</h4>
                <div class="row" id="all-color">

                </div>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="box">
                <h4 class="montserrat mb20">Palettes Trends</h4>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="thumbnail">
                            <a href=""><div class="box-color"></div></a>
                            <p class="center montserrat mt10"><a href="">Affordable</a> </p>
                            <p class="center raleway txt-lgreen">by <a href="" class="txt-red">Putri Damayanti</a></p>
                            <p class="center txt-grey f12">
                                <i class="fa fa-heart pr5"></i>12
                                <i class="fa fa-comment pr5 ml10"></i>4
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="box">
                <h4 class="montserrat mb20">Pattern Trends</h4>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="thumbnail">
                            <a href="">
                                <div class="box-color"></div>
                                <p class="center montserrat mt10">Affordable</p>
                                <p class="center raleway txt-lgreen">by <a href="" class="txt-red">Putri Damayanti</a></p>
                                <p class="center txt-grey mt10">
                                    <i class="fa fa-heart pr5"></i>12
                                    <i class="fa fa-comment pr5 ml10"></i>4
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

@endsection
