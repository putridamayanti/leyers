<?php

namespace App\Http\Controllers;

use App\Category;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();
        $data['category'] = $category;

        return view('category.index', $data);
    }

    public function create(Request $request)
    {
        $data = new Category();
        $data->name = $request->name;
        $data->save ();
        return response ()->json ( $data );
//        $category = new Category();
//        $category->name = $request->name;
//        $category->save();
//
//        return redirect('/home');
    }

    public function edit($id)
    {
        $category = Category::find($id);

        return response()->json($category);
    }

    public function update(Request $request)
    {
        $id = $request->id;
        $category = Category::find($id);
        $category->name = $request->name;
        $category->save();

        return response()->json($category);
    }

    public function delete($id)
    {
        $category = Category::find($id)->delete();

        return response()->json($category);
    }
}
