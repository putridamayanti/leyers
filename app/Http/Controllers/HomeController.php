<?php

namespace App\Http\Controllers;

use App\Category;
use App\Color;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user   = User::where('id', '=', Auth::user()->id)->get();
        $color  = Color::all();
        $data['user']   =   $user;
        $data['color']  =   $color;

        return view('home', $data);
    }
}
