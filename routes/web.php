<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/colors', function (){
    $color = \App\Color::with('user')->orderByDesc('created_at')->get();
    $data['color'] = $color;

    return view('color', $data);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Profile
Route::get('/profile', 'ProfileController@index');
Route::get('/edit-profile/{id}', 'ProfileController@edit');
Route::post('/update-profile', 'ProfileController@update');

//Users
Route::get('/users', 'UsersController@index');
Route::get('/detail-user/{id}', 'UsersController@detail');

//Category
Route::get('/categories', 'CategoryController@index');
Route::post('/add-category', 'CategoryController@create');
Route::get('/edit-category/{id}', 'CategoryController@edit');
Route::post('/update-category/{id}', 'CategoryController@update');
Route::post('/delete-category/{id}', 'CategoryController@delete');

//Activity
Route::get('/category-activity', 'ActivityController@category_activity');
Route::post('/add-category-activity', 'ActivityController@add_category_activity');
Route::get('/activity', 'ActivityController@index');

//Colors
Route::get('/all-color', 'ColorController@getAllColor');
Route::get('/user/color', 'ColorController@index');
Route::get('/user/colors', 'ColorController@getColorUser');
Route::post('/user/add-color', 'ColorController@store');
Route::get('/user/edit-color/{id}', 'ColorController@edit');
Route::post('/user/update-color/{id}', 'ColorController@update');
Route::post('/user/delete-color/{id}', 'ColorController@destroy');