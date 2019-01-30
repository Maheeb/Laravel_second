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

//Route::get('/', function () {
//    return view('shop');
//});
Route::get('/admin', function () {
    return view('admin.index');
});
Route::get('/',['as'=>'mother_func','uses'=>'CardController@base']);
Route::resource('admin/card','CardController');
Route::resource('admin/prod','ProductController');
Route::resource('admin/photo','PhotoController');