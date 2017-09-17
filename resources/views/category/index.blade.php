@extends('layouts.app')

@section('content')
    <div class="col-sm-12">
        <div class="content-heading">
            <h3 class="montserrat">Categories</h3>
            <p class="txt-grey">List Category Of Post</p>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="box bg-light">
            <h4 class="montserrat mb20">Categories Of Post</h4>
            <div class="box bg-white">
                <button onclick="addRowCategory()" class='btn btn2 btn-yellow w15 mb20'><i class='fa fa-save'></i> Add</button>
                <table class="table table-bordered" id="category">
                    <thead>
                    <tr>
                        <th>Category Name</th>
                        <th>Opsi</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($category as $i => $item)
                        <tr class="row-category{{ $item->category_id }}">
                            <td style="vertical-align: middle" id="cat-name">{{ $item->name }}</td>
                            <td style="vertical-align: middle; display: none" id="cat-name-edit"><input id="name" type="text" name="name" class="form-input"></td>
                            <td style="width: 40%" class="center">
                                <button onclick="editCategory(this)" class="btn btn-icon btn-sm btn-green" value="{{ $item->category_id }}"><i class="fa fa-pencil"></i></button>
                                <button onclick="deleteCategory(this)" class="btn btn-icon btn-sm btn-red ml5" value="{{ $item->category_id }}"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection