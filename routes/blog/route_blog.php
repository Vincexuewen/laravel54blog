<?php
/**
 * Created by PhpStorm.
 * User: xuewen.zeng
 * Date: 2017/7/27
 * Time: 9:46
 */
//博客前端
Route::get('/',['as' => 'reception','uses' => 'Blog\Reception\blogController@index']);
//文章内容显示
Route::get('/{id}','Blog\Reception\blogController@article')->where('id','[0-9]+');
Route::get('/{name}','Blog\Reception\blogController@articles_type')->where('name','[a-zA-Z]+');
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
        Route::group(['prefix' => '/Content-Manage/Article-Manage'],function (){
            //文章列表
            Route::get('/','Blog\Admin\ArticleController@index');
            //文章创建
            Route::any('/create','Blog\Admin\ArticleController@create');
            //文章编辑
            Route::any('/edit/{id}','Blog\Admin\ArticleController@edit')->where('id','[0-9]+');
            //文章删除
            Route::post('/delete','Blog\Admin\ArticleController@delete');
        });

    });
});