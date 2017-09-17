<?php

namespace App\Http\Controllers;

use App\Color;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $color = Color::with('user')->orderByDesc('created_at')->get();
        $data['color'] = $color;

        return view('color.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAllColor()
    {
        $color = Color::with('user')->orderByDesc('created_at')->get();

        return response()->json($color);
    }

    public function getColorUser()
    {
        $color = Color::where('user_id', '=', Auth::user()->id)->orderByDesc('created_at')->get();

        return response()->json($color);
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $color = new Color();
        $color->user_id = $request->user;
        $color->title   = $request->title;
        $color->hex     = $request->hex;
        $color->rgb     = $request->rgb;
        $color->save();

        return response()->json($color);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $color = Color::find($id);

        return response()->json($color);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $color = Color::find($id);

        return response()->json($color);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $color = Color::find($id);
        $color->hex = $request->hex;
        $color->rgb = $request->rgb;
        $color->title = $request->title;
        $color->update();

        return response()->json($color);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $color = Color::find($id)->delete();

        return response()->json($color);
    }
}
