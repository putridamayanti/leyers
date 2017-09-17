<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $user   = User::where('id', '=', Auth::user()->id)->get();
        $data['user']   =   $user;
        return view('profile.index', $data);
    }

    public function edit($id)
    {
        $user   = User::find($id);

        return response()->json($user);
    }

    public function update(Request $request)
    {
        $id = $request->id;
        $user  = User::find($id);
        $user->fullname = $request->fullname;
        $user->birthday = $request->birthday;
        $user->gender = $request->gender;
        $user->country = $request->country;
        $user->save();

        return redirect('/profile');
    }
}
