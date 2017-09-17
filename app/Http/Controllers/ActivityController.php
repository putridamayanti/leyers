<?php

namespace App\Http\Controllers;

use App\Activity;
use App\Category_Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index()
    {
        $category = Category_Activity::all();
        $activity = Activity::all();
        $data['category'] = $category;
        $data['activity'] = $activity;

        return view('activity.index', $data);
    }

    public function category_activity()
    {
        $category = Category_Activity::all();
        $data['category'] = $category;

        return view('activity.category', $data);
    }

    public function add_category_activity(Request $request)
    {
        $category = new Category_Activity();
        $category->name = $request->name;
        $category->save();

        return response()->json($category);
    }
}
