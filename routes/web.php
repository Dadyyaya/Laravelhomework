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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/post', 'PostController@post');

Route::get('/post/{id}', 'PostController@getPostById');

Route::get('/post/create', 'PostController@create');

Route::get('/post/comment', 'PostController@comment');