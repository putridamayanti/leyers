@extends('layouts.app')

@section('content')
    <div class="col-sm-7">
        <div class="box bg-light">
            <h1 class="roboto mb20">Edit Profile</h1>
            <form class="form">
                <div class="row">
                    <div class="col-sm-12">
                        <label class="col-sm-4 mt10">Full Name</label>
                        <div class="col-sm-8 mb20">
                            <input class="form-input roboto" type="text" name="fullname" value="{{ $user->fullname }}">
                        </div>

                        <label class="col-sm-4 mt10">Birthday</label>
                        <div class="col-sm-8 mb20">
                            <input class="form-input roboto datepicker-here" name="birthday" type='text' value="{{ $user->birthday }}" data-position="right top" data-language='en'>
                        </div>

                        <label class="col-sm-4 mt10">Gender</label>
                        <div class="col-sm-8 mb20">
                            <select class="wide" name="gender">
                                @if($user->gender == "M")
                                    <option value="M" selected>Male</option>
                                    <option value="F">Female</option>
                                @elseif($user->gender == "F")
                                    <option value="M">Male</option>
                                    <option value="F" selected>Female</option>
                                @else
                                    <option value="M">Male</option>
                                    <option value="F">Female</option>
                                @endif

                            </select>
                        </div>

                        <label class="col-sm-4 mt10">Location</label>
                        <div class="col-sm-8 mb20">
                            <input class="form-input roboto" type="text" name="fullname" value="{{ $user->location }}">
                        </div>

                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-yellow roboto pull-right"><i class="fa fa-save"></i> Save</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="col-sm-5">
        <div class="box bg-light">
            <form>
                <div class="row">
                    <div class="col-sm-12 mb20">
                        <div class="col-sm-5">
                            <img style="border: #ffffff 3px solid" src="/image/Me.jpg" class="w100">
                        </div>
                        <div class="col-sm-7">
                            <label class="mt10">Photo Profile</label>
                            <input class="form-input roboto" type="file" name="photo">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection