@extends('layouts.app')

@section('content')
    <div class="col-sm-12">
        <div class="content-heading">
            <h3 class="montserrat">Users</h3>
            <p class="txt-grey">List Of Users</p>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="box">
            <h4 class="montserrat mb20">List Of Users</h4>
            <table class="table table-bordered table-responsive table-hover">
                <thead>
                <tr>
                    <th>User Id</th>
                    <th>Role User</th>
                    <th>Fullname</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Option</th>
                </tr>
                </thead>
                <tbody>
                @foreach($user as $item)
                    <tr>
                        <td class="center">{{ $item->id }}</td>
                        <td>{{ $item->role->name }}</td>
                        <td>{{ $item->fullname }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td><p class="status-green">Active</p></td>
                        <td class="center">
                            <button type="button" class="btn btn-sm btn-grey detail" value="{{ $item->id }}" data-toggle="modal" data-target=".userModal">
                                <i class="fa fa-eye pr10"></i> Detail
                            </button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="modal fade userModal" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Detail User's Information</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="col-sm-12">
                                <img src="/image/Me.jpg" class="w100">
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <div class="col-sm-6">
                                <table class="table table-bordered" id="user-table">
                                    <tr>
                                        <th>Fullname</th>
                                        <td class="fullname"></td>
                                    </tr>
                                    <tr>
                                        <th>Username</th>
                                        <td width="70%" class="username"></td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td width="70%" class="email"></td>
                                    </tr>
                                    <tr>
                                        <th>Birthday</th>
                                        <td width="70%" class="birthday"></td>
                                    </tr>
                                    <tr>
                                        <th>Country</th>
                                        <td width="70%" class="country"></td>
                                    </tr>
                                    <tr>
                                        <th>Role User</th>
                                        <td width="70%" class="role"></td>
                                    </tr>
                                </table>
                            </div>
                            {{--<div class="col-sm-6">--}}
                                {{--<table class="table table-bordered">--}}
                                    {{--<tr>--}}
                                        {{--<th>Last Active</th>--}}
                                        {{--@if($user->fullname == null)--}}
                                            {{--<td width="70%">-</td>--}}
                                        {{--@else--}}
                                            {{--<td width="70%">{{ $user->fullname }}</td>--}}
                                        {{--@endif--}}
                                    {{--</tr>--}}
                                    {{--<tr>--}}
                                        {{--<th>Recent Activity</th>--}}
                                        {{--@if($user->fullname == null)--}}
                                            {{--<td width="70%">-</td>--}}
                                        {{--@else--}}
                                            {{--<td width="70%">{{ $user->fullname }}</td>--}}
                                        {{--@endif--}}
                                    {{--</tr>--}}
                                    {{--<tr>--}}
                                        {{--<th>Payment</th>--}}
                                        {{--@if($user->fullname == null)--}}
                                            {{--<td width="70%">-</td>--}}
                                        {{--@else--}}
                                            {{--<td width="70%">{{ $user->fullname }}</td>--}}
                                        {{--@endif--}}
                                    {{--</tr>--}}
                                {{--</table>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
@endsection