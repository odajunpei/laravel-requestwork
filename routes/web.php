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

Route::get('/profile/index', 'ProfileController@index');
Route::get('/profile/confirm', 'ProfileController@confirm');
Route::post('/profile/index', 'ProfileController@index');
