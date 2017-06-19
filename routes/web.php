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

Route::get('/login','Admin\LoginController@showloginform');
Route::post('/login',['as' => 'login','uses' => 'Admin\LoginController@login']);
Route::get('/register','Admin\RegisterController@showregisterform');
Route::post('/register',['as' => 'register','uses' => 'Admin\RegisterController@register']);

Route::get('/dashboard','Admin\HomeController@dashboard');