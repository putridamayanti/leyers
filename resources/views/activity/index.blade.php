@extends('layouts.app')

@section('content')
    <div class="col-sm-12">
        <div class="content-heading">
            <h3 class="montserrat">Activity</h3>
            <p class="txt-grey">Activity Of User.</p>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="box">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th width="10%">User Id</th>
                    <th>Fullname</th>
                    <th>Activity</th>
                    <th>User Target</th>
                    <th>Option</th>
                </tr>
                </thead>
                <tbody>
                @foreach($activity as $i => $item)
                    <tr>
                        <td>{{ $i+1 }}</td>
                        <td>{{ $item->user_id }}</td>
                        <td>{{ $item->user->fullname }}</td>
                        <td>{{ $item->category->name }}</td>
                        <td>{{ $item->user_target->fullname }}</td>
                        <td class="center">
                            <button onclick="editCategory(this)" class="btn btn-icon btn-sm btn-green" value="{{ $item->id }}"><i class="fa fa-pencil"></i></button>
                            <button onclick="deleteCategory(this)" class="btn btn-icon btn-sm btn-red ml5" value="{{ $item->id }}"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection