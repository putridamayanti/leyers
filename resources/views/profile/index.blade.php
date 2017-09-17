@extends('layouts.app')

@section('content')
    <div class="col-sm-7 mb20">
        <div class="box bg-light">
            <div class="row">
                <div class="col-sm-4">
                    <img src="image/Me.jpg" class="w100">
                </div>
                <div class="col-sm-8 roboto">
                    {{--<h2>{{ Auth::user()->name }}</h2>--}}
                    @foreach($user as $item)
                        @if($item->fullname == null)
                            <h2 class="mb10">{{ $item->name }}</h2>
                        @else
                            <h2 class="mb10">{{ $item->fullname }}</h2>
                        @endif
                        <h3 class="mb10">{{ $item->country }}</h3>
                        <h5 class="mt10">Balance : <strong>$ {{ $item->balance }}</strong></h5>

                    <button id="myBtn" class="btn btn-yellow mt20 myBtn" value="{{ $item->id }}"><i class="fa fa-pencil"></i> Edit Profile</button>

                    <!-- The Modal -->
                    <div id="myModal" class="modal">

                        <!-- Modal content -->
                        <div class="modal-content">
                            <span class="close">&times;</span>
                            <form class="form" method="POST" action="/update-profile">
                                {{ csrf_field() }}
                                <input type="hidden" name="id" id="id">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label class="col-sm-4 mt10">Full Name</label>
                                        <div class="col-sm-8 mb20">
                                            <input class="form-input roboto" name="fullname" id="fullname" type='text'>
                                        </div>

                                        <label class="col-sm-4 mt10">Birthday</label>
                                        <div class="col-sm-8 mb20">
                                            <input class="form-input roboto datepicker-here" name="birthday" id="birthday" type='text' data-position="left top" data-language='en'>
                                        </div>

                                        <label class="col-sm-4 mt10">Gender</label>
                                        <div class="col-sm-8 mb20">
                                            <select class="wide gender" name="gender" id="gender">
                                                <option value="M">Male</option>
                                                <option value="F">Female</option>
                                            </select>
                                        </div>

                                        <label class="col-sm-4 mt10">Country</label>
                                        <div class="col-sm-8 mb20">
                                            <input class="form-input roboto" type="text" name="country" id="country">
                                        </div>

                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-yellow roboto pull-right"><i class="fa fa-save"></i> Save</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-5 ">
        <div class="box bg-light">
            <h2 class="mb20 roboto">Recent Activity</h2>
            <h4><i class="fa fa-thumbs-up pr10"></i> Likes image of <a href="" class="txt-lgreen"> Andrew Image</a></h4>
            <p class="f12 mb10 txt-grey">3 minutes ago</p>
            <h4><i class="fa fa-comment-o pr10"></i> Commented on <a href="" class="txt-lgreen"> Andrew's</a> Image</h4>
            <p class="f12 mb10 txt-grey">3 minutes ago</p>
        </div>
    </div>
    @if(Auth::user()->role_id == 2)
        <div class="col-sm-7 mb20">
            <div class="box bg-light">
                <h2 class="mb20 roboto">Your Images</h2>
                <div class="row">
                    <div class="col-sm-3">
                        <a href="image.html" class="thumbnail">
                            <img src="image/Affordable2.jpg">
                            <p class="center roboto mt10">Title</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @elseif(Auth::user()->role_id == 3)
        <div class="col-sm-7">
            <div class="box bg-light">
                <h2 class="mb20 roboto">Image Downloaded</h2>
                <div class="row">
                    <div class="col-sm-3">
                        <a href="image.html" class="thumbnail">
                            <img src="image/Affordable2.jpg">
                            <p class="center roboto mt10">Title</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection