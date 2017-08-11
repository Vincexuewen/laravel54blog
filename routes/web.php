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
Route::group(['middleware' => 'web'],function(){
    // 博客项目
    Route::group(['domain' => 'blog.project.com'],function (){
        include __DIR__ ."/blog/route_blog.php";
    });
    //表单注册项目
    Route::group(['domain' => 'form.project.com'],function(){
        include __DIR__ ."/form/route_form.php";
    });
});
