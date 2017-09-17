<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $user = User::all();
        $data['user'] = $user;

        return view('users.index', $data);
    }

    public function detail($id)
    {
        $user = User::with('role')->find($id);

        return response()->json($user);
    }
}
