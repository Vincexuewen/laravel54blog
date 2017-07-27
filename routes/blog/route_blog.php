<?php
/**
 * Created by PhpStorm.
 * User: xuewen.zeng
 * Date: 2017/7/27
 * Time: 9:46
 */
//博客前端
Route::get('/',['as' => 'reception','uses' => 'Blog\Reception\blogController@index']);
//博客后台
Route::group(['prefix' => 'admin'],function (){
    Route::get('/login',['as' => 'showloginform','uses' => 'Blog\Admin\LoginController@showloginform']);
    Route::post('/login',['as' => 'login','uses' => 'Blog\Admin\LoginController@login']);
    Route::get('/register',['as' => 'showregisterform','uses' => 'Blog\Admin\RegisterController@showregisterform']);
    Route::post('/register',['as' => 'register','uses' => 'Blog\Admin\RegisterController@register']);

    Route::group(['middleware' => 'adminauth'],function (){
        //后台主页
        Route::get('/dashboard',['as' => 'dashaboard', 'uses' => 'Blog\Admin\HomeController@dashboard']);
    });
});