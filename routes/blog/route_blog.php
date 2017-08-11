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
Route::get('/{name}/{name2}','Blog\Reception\blogController@articles_type2')->where('name2','[a-zA-Z]+');
//资源分享
Route::get('/share.html','Blog\Reception\shareController@index');
//博客后台
Route::group(['prefix' => 'blog/admin'],function (){
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
        //轮播图管理
        Route::group(['prefix' => '/Content-Manage/Banner-Manage'],function (){
            //轮播图列表
            Route::get('/','Blog\Admin\BannerController@index');
            //轮播图添加
            Route::post('/create','Blog\Admin\BannerController@create');
            //轮播图编辑
            Route::any('/edit/{id}','Blog\Admin\BannerController@edit')->where('id','[0-9]+');
            //轮播图删除
            Route::post('/delete','Blog\Admin\BannerController@delete');
        });
        //功能模块
        Route::group(['prefix' => '/Function-Manage'],function (){
            //邮件推送
            Route::group(['prefix' => '/Email-Send'],function (){
                //推送纯文本
                Route::any('/sendOnlyText',['as' => 'sendOnlyText','uses' => 'Blog\Admin\SendEmailController@index']);
                //简单邮件+附件发送
                Route::any('/sendEmail',['as' => 'sendEmail','uses' => 'Blog\Admin\SendEmailController@sendEmail']);
                Route::any('/queueEmail',['as' => 'queueEmail','uses' => 'Blog\Admin\SendEmailController@queueEmail']);
            });
            //文件上传
            Route::group(['prefix' => '/Upload-File'],function (){
                //使用$file->move()保存文件
                Route::any('/',['as' => 'upload','uses' => 'Blog\Admin\UploadController@index']);
                //使用$file->storeAs()保存文件
                Route::any('/storageUpload',['as' => 'storageUpload','uses' => 'Blog\Admin\UploadController@storageUpload']);
                //上传文件响应
                Route::get('/responseUpload/{name}',['as' => 'responseUpload','uses' => 'Blog\Admin\UploadController@responseUpload']);
                Route::get('/storageUploadtest/test/{name}',['as' => 'storageUploadtest','uses' => 'Blog\Admin\UploadController@storageUploadtest']);
            });

        });
    });
});