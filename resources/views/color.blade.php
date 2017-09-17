@extends('layouts.style')

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
    <div class="col-sm-12 center">
        <h1 class="montserrat">SURF YOUR COLOR INSPIRATION</h1>
        <h5 class="raleway mt10">You can search color or palettes that you want or just looking for inspiration here.</h5>
    </div>
    <div class="col-sm-12 mt50">
        <div class="row" id="all-color"></div>
    </div>
@endsection