/**
 * Created by Putri Damayanti on 8/1/2017.
 */
$(document).ready(function () {

    // Edit Profile
    $(document).on('click','#myBtn', function () {
        var id = $(this).val();

        $.get('/edit-profile/' + id, function (data) {
            console.log(id);
            $('#id').val(data.id);
            $('#fullname').val(data.fullname);
            $('#birthday').val(data.birthday);
            if(data.gender = "F") {
                $(".gender option[value='F']").attr('selected', 'selected');
            } else {
                $(".gender option[value='M']").attr('selected', 'selected');
            }
            $('#country').val(data.country);
            $("#myModal").show();
        });

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            $("#myModal").hide();
        };
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == document.getElementById("myModal")) {
                $("#myModal").hide();
            }
        }
    });

    // Detail User
    $('.detail').on('click', function () {
        var id = $(this).val();
        console.log(id);
        $.ajax({
            url: '/detail-user/' + id,
            type: 'GET',
            success: function (data) {
                console.log(data.id);
                $('.fullname').html(data.fullname);
                $('.username').html(data.name);
                $('.email').html(data.email);
                $('.birthday').html(data.birthday);
                $('.country').html(data.country);
                $('.role').html(data.role.name);
                // $('.email').html(data.email);
            },
            error: function (data) {
                console.log('Error : ' + data)
            }
        });
    });

    // Category Activity
    $('.add-row-activity').on('click', function () {
        var i = 0;
        i++;
        var row = ''+
            '<tr class="row-category'+i+'">' +
            '<td style="vertical-align: middle"></td>'+
            '<td style="vertical-align: middle"><input type="text" name="name" class="form-input name-category" data-id="'+i+'"></td>'+
            '<td style="vertical-align: middle"></td>'+
            '<td style="vertical-align: middle"></td>'+
            '<td class="center">'+
            '<button onclick="saveActivity(this)" class="btn btn-yellow" value="add"><i class="fa fa-save"></i> Save</button>'+
            '<button onclick="removeCategory(this)" class="btn btn-red ml10"><i class="fa fa-close"></i> Cancel</button>'+
            '</td>'+
            '</tr>';
        $('#category-activity').append(row);
    });



    $('.save-color').on('click', function () {
        var user = $('.user_id').val();
        var color = $(current).val();
        var title = $('.title-color').val();
        var status = $(this).val();
        var hex = $('.color').val();
        var rgb = hexToRgb(hex);
        console.log(status);
        console.log(hex);
        console.log(rgb);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        if(status = 'add') {
            $.ajax({
                url: '/user/add-color',
                type: 'POST',
                data: {
                    'user'  :   user,
                    'title' :   title,
                    'hex'   :   hex,
                    'rgb'   :   rgb
                },
                success: function () {
                    console.log('Success');
                    window.location.href = '/user/color';
                },
                error: function (data) {
                    console.log('Error : ' + data)
                }
            })
        } else if (status = 'update') {
            $.ajax({
                url: '/user/update-color',
                type: 'POST',
                data: {
                    'title' :   title,
                    'hex'   :   hex,
                    'rgb'   :   rgb
                },
                success: function () {
                    console.log('Success');
                    window.location.href = '/user/color';
                },
                error: function (data) {
                    console.log('Error : ' + data)
                }
            })
        }
    });
});

// Dropdown
function myFunction() {
    $("#myDropdown").slideToggle();
}

// Category
function addRowCategory() {
    var i = 0;
    i++;
    var row = ''+
        '<tr class="row-category'+i+'">' +
        '<td style="vertical-align: middle"><input id="name-category" type="text" name="name" class="form-input" data-id="'+i+'"></td>'+
        '<td style="width: 40%" class="center">'+
        '<button onclick="addCategory('+i+')" class="btn btn-yellow"><i class="fa fa-save"></i> Save</button>'+
        '<button onclick="removeCategory(this)" class="btn btn-red ml10"><i class="fa fa-close"></i> Cancel</button>'+
        '</td>'+
        '</tr>';
    $('#category').append(row);
}

function addCategory(i) {
    var name = $('#name-category').val();
    var i = $('#name-category').attr('data-id');
    console.log(i);
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: 'add-category',
        type: 'POST',
        data: {
            'name' : name
        },
        success: function (data) {
            console.log(data);
            var row = ''+
                '<tr class="row-category'+data.category_id+'">' +
                '<td style="vertical-align: middle">'+data.name+'</td>'+
                '<td style="width: 40%" class="center">'+
                '<button onclick="editCategory(this)" class="btn btn-icon btn-sm btn-green" value="'+data.category_id+'"><i class="fa fa-pencil"></i></button>'+
                '<button onclick="deleteCategory(this)" class="btn btn-icon btn-sm btn-red" value="'+data.category_id+'" style="margin-left: 9px"><i class="fa fa-trash"></i></button>'+
                '</td>'+
                '</tr>';
            $('.row-category'+i).replaceWith(row);
        },
        error: function (data) {
            console.log('Error : ' + data);
        }
    });
}

function editCategory(current) {
    var id = $(current).val();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: 'GET',
        url: '/edit-category/' + id,
        success: function (data) {
            var row = ''+
                '<tr class="row-category'+data.category_id+'">' +
                '<td style="vertical-align: middle"><input id="name-category" type="text" class="form-input" value="'+data.name+'"></td>'+
                '<td style="width: 40%" class="center">'+
                '<button onclick="updateCategory(this)" class="btn btn-green" value="'+data.category_id+'"><i class="fa fa-save"></i> Save</button>'+
                '</td>'+
                '</tr>';
            $('.row-category'+data.category_id).replaceWith(row);
        }
    })
}

function updateCategory(current) {
    var id = $(current).val();
    console.log(id);
    $.ajax({
        type: 'POST',
        url: '/update-category/' + id,
        data: {
            name : $('#name-category').val()
        },
        success: function (data) {
            console.log(data);
            var row = ''+
                '<tr>' +
                '<td style="vertical-align: middle">'+data.name+'</td>'+
                '<td style="width: 40%" class="center">'+
                '<button id="edit-category" class="btn btn-icon btn-sm btn-green" value="{{ $item->category_id }}"><i class="fa fa-pencil"></i></button>'+
                '<button onclick="deleteCategory(this)" class="btn btn-icon btn-sm btn-red" value="{{ $item->category_id }}" style="margin-left: 9px"><i class="fa fa-trash"></i></button>'+
                '</td>'+
                '</tr>';
            $('.row-category'+data.category_id).replaceWith(row);
        },
        erorr: function (data) {
            console.log('Error : ' + data)
        }
    });
}

function deleteCategory(current) {
    var id = $(current).val();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    swal({
            title: "Are you sure?",
            text: "You will not be able to recover this imaginary file!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: false
        },
        function() {
            $.ajax({
                type: 'POST',
                url: '/delete-category/' + id,
                success: function (data) {
                    console.log(data);
                    swal("Deleted!", "Your imaginary file has been deleted.", "success");
                    $('.row-category'+id).remove()
                },
                error: function (data) {
                    console.log('Error : ' + data);
                }
            });
        }
    );
}

function removeCategory(current) {
    $(current).parent().parent().remove();
}

function hexToRgb(h)
{
    var r = parseInt((cutHex(h)).substring(0,2),16), g = parseInt((cutHex(h)).substring(2,4),16), b = parseInt((cutHex(h)).substring(4,6),16);
    return r+','+g+','+b;
}

function cutHex(h) {return (h.charAt(0)=="#") ? h.substring(1,7):h}

function editData(current) {
    var id = $(current).val();
    console.log(id);
    $.ajax({
        type: 'GET',
        url: '/user/edit-color/' + id,
        success: function (data) {
            console.log(data);
            $('#input-color').attr('value', data.hex);
            $('#title-color').attr('value', data.title);
        },
        error: function (data) {
            console.log(data);
        }
    });
}

function deleteData(current) {
    var value = $(current).attr('id');
    var id = $(current).val();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    if(value = 'color-data'){
        swal({
                title: "Are you sure?",
                text: "You will not be able to recover this imaginary file!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete it!",
                closeOnConfirm: false
            },
            function() {
                $.ajax({
                    type: 'POST',
                    url: '/user/delete-color/' + id,
                    success: function (data) {
                        console.log(data);
                        // swal("Deleted!", "Your imaginary file has been deleted.", "success");
                        window.location.href = '/user/color';
                    },
                    error: function (data) {
                        console.log('Error : ' + data);
                    }
                });
            }
        );
    }
}