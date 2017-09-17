@extends('layouts.app')

@section('content')
    <script>
        $.ajax({
            type: 'GET',
            url: '/user/colors',
            success: function (data) {
                console.log(data);

                $.each(data, function (index, element) {
                    console.log(data);
                    $('#user-color').append(
                        '<div class="col-sm-3">'+
                        '<div class="thumbnail">'+
                        '<a href=""><div class="box-color color'+element.color_id+'"></div></a>'+
                        '<p class="w50 pull-left mt10 txt-grey f12">HEX '+element.hex+'</p>'+
                        '<p class="w50 pull-right mt10 txt-grey f12 right">RGB '+element.rgb+'</p>'+
                        '<a href=""><p class="center montserrat mt10 mb10">'+element.title+'</p></a>'+
                        '<p class="left txt-grey pull-left f12 mr10 mt5" style="width: 40%">'+
                        '<i class="fa fa-heart pr5"></i>12'+
                        '<i class="fa fa-comment pr5 ml10"></i>4'+
                        '</p>'+
                        '<button class="btn btn-sm btn-yellow" data-toggle="modal" data-target="#color-update" value="'+element.color_id+'" onclick="editData(this)">Edit</button>'+
                        '<button class="btn btn-sm btn-red ml5 delete" value="'+element.color_id+'" id="color-data" onclick="deleteData(this)">Delete</button>'+
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
            <h3 class="montserrat">Colors</h3>
            <p class="txt-grey">List Colors Of User Uploaded.</p>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="box">
            <div class="row">
                <div class="col-sm-10">
                    <h4 class="montserrat mb20 w70 pull-left mt10">Colors Uploaded</h4>
                </div>
                <div class="col-sm-2">
                    <a href="#" class="pull-right btn btn-yellow mb10" data-toggle="modal" data-target="#color-add"><i class="fa fa-plus-circle"></i> Add New Color</a>
                </div>
            </div>
            <div class="row" id="user-color"></div>
        </div>
    </div>

    <div id="color-add" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title montserrat">Add New Color</h4>
                </div>
                <div class="modal-body">
                    <form class="form">
                        <input type="hidden" class="user_id" value="{{ Auth::user()->id }}">
                        <label>Color</label>
                        <div class="input-group colorpicker-component color-picker">
                            <input type="text" value="#ffffff" class="form-input color">
                            <span class="input-group-addon"><i></i></span>
                        </div>

                        <label class="mt10">Title</label>
                        <input type="text" name="title" class="form-input title-color">
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-green save-color" value="add" data-dismiss="modal">Save</button>
                    <button type="button" class="btn btn-red" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

    <div id="color-update" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title montserrat">Add New Color</h4>
                    </div>
                    <div class="modal-body">
                        <form class="form">
                            <input type="hidden" id="user_id" value="{{ Auth::user()->id }}">
                            <label>Color</label>
                            <div class="input-group colorpicker-component color-picker">
                                <input type="text" id="input-color" class="form-input color">
                                <span class="input-group-addon"><i></i></span>
                            </div>

                            <label class="mt10">Title</label>
                            <input type="text" id="title-color" class="form-input">
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-green save-color" value="update" data-dismiss="modal">Save</button>
                        <button type="button" class="btn btn-red" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
    </div>
@endsection