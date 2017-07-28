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
        //文章管理
        Route::get('/Content-Manage/Article-Manage','Blog\Admin\ArticleController@index');
        //文章创建
        Route::any('/Content-Manage/Article-Manage/create','Blog\Admin\ArticleController@create');
        //文章编辑
        Route::any('/Content-Manage/Article-Manage/edit/{id}','Blog\Admin\ArticleController@edit')->where('id','[0-9]+');
        //文章删除
        Route::post('/Content-Manage/Article-Manage/delete','Blog\Admin\ArticleController@delete');
    });
});