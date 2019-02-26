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

Route::get('/', "PagesController@index");

Route::get('/users/{id}/{name}', function () {
  return view('pages.about');
  // $id $name
});

Route::get('/about', "PagesController@about");
Route::get('/services', "PagesController@services");

//Create all the routes that we need
Route::resource('posts', 'PostsController');
