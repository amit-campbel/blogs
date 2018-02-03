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

Route::get('/', 'PostController@index');
Route::get('/home', 'PostController@index')->name('home');

Route::get('/login', 'UserController@login');
Route::post('/login', 'UserController@login');
Route::get('/register', 'UserController@register');
Route::post('/register', 'UserController@register');

Route::get('/posts/create', 'PostController@create');
Route::get('/posts/edit/{id}', 'PostController@edit');
Route::get('/posts/view/{id}', 'PostController@view');
Route::post('/posts/store', 'PostController@store');
Route::post('/posts/update/{id}', 'PostController@update');
