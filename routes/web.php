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
    return view('admin.index');
})->name('admin.index');


//User
Route::resource('user','UserController');
Route::get('/user/status/update','UserController@updateStatus')->name('user.update.status');

//product
Route::resource('product','ProductController');
Route::get('/product/status/update','ProductController@updateStatus')->name('product.update.status');
//category
Route::resource('category','CategoryController');
Route::get('/category/status/update','CategoryController@updateStatus')->name('category.update.status');