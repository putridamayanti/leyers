@extends('layouts.app')

@section('content')
    <div class="col-sm-3">
        <div class="col-sm-12">
            <img src="/image/Me.jpg" class="w100">
        </div>
    </div>
    <div class="col-sm-9">
        <div class="col-sm-6">
            <table class="table table-bordered">
                <tr>
                    <th>Fullname</th>
                    @if($user->fullname == null)
                        <td width="70%">-</td>
                    @else
                        <td width="70%">{{ $user->fullname }}</td>
                    @endif
                </tr>
                <tr>
                    <th>Username</th>
                    <td width="70%">{{ $user->name }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td width="70%">{{ $user->email }}</td>
                </tr>
                <tr>
                    <th>Balance</th>
                    <td width="70%">$ {{ $user->balance }}</td>
                </tr>
                <tr>
                    <th>Birthday</th>
                    @if($user->birthday == null)
                        <td width="70%">-</td>
                    @else
                        <td width="70%">{{ $user->birthday }}</td>
                    @endif
                </tr>
                <tr>
                    <th>Country</th>
                    @if($user->country == null)
                        <td width="70%">-</td>
                    @else
                        <td width="70%">{{ $user->country }}</td>
                    @endif
                </tr>
                <tr>
                    <th>Role User</th>
                    <td width="70%">{{ $user->role->name }}</td>
                </tr>
            </table>
        </div>
        <div class="col-sm-6">
            <table class="table table-bordered">
                <tr>
                    <th>Last Active</th>
                    @if($user->fullname == null)
                        <td width="70%">-</td>
                    @else
                        <td width="70%">{{ $user->fullname }}</td>
                    @endif
                </tr>
                <tr>
                    <th>Recent Activity</th>
                    @if($user->fullname == null)
                        <td width="70%">-</td>
                    @else
                        <td width="70%">{{ $user->fullname }}</td>
                    @endif
                </tr>
                <tr>
                    <th>Payment</th>
                    @if($user->fullname == null)
                        <td width="70%">-</td>
                    @else
                        <td width="70%">{{ $user->fullname }}</td>
                    @endif
                </tr>
            </table>
        </div>
    </div>
    @if($user->role_id == 1)
        <div class="col-sm-12 mt20">
            <div class="box bg-light">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="roboto mb20">Images Uploaded</h2>
                    </div>
                    <div class="col-sm-2">
                        <a href="" class="thumbnail">
                            <img src="/image/Affordable2.jpg">
                            <h5 class="roboto mt10 center txt-red">Affordable</h5>
                            <h5 class="roboto mt10 center">Andrew</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @elseif($user->role_id == 2)
        <div class="col-sm-12 mt20">
            <div class="box bg-light">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="roboto mb20">Images Uploaded</h2>
                    </div>
                    <div class="col-sm-2">
                        <a href="" class="thumbnail">
                            <img src="/image/Affordable2.jpg">
                            <h5 class="roboto mt10 center txt-red">Affordable</h5>
                            <h5 class="roboto mt10 center">Andrew</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @elseif($user->role_id == 3)
        <div class="col-sm-12 mt20">
            <div class="box bg-light">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="roboto mb20">Images Downloaded</h2>
                    </div>
                    <div class="col-sm-2">
                        <a href="" class="thumbnail">
                            <img src="/image/Affordable2.jpg">
                            <h5 class="roboto mt10 center txt-red">Affordable</h5>
                            <h5 class="roboto mt10 center">Andrew</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection