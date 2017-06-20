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

//后台主页
Route::get('/Admin/dashboard','Admin\HomeController@dashboard');
/*
 * 系统管理
 * */
/*管理员管理路由*/
//管理员列表页面
Route::get('/Admin/system_manage/admin_manage/admin_list','Admin\SystemManageController@admin_list');
//管理员列表处理
Route::post('/Admin/system_manage/admin_manage/admin_list','Admin\SystemManageController@admin_list');
//角色管理
Route::get('/Admin/system_manage/role_manage/role_list','Admin\SystemManageController@role_list');
//权限管理
Route::get('/Admin/system_manage/permission_manage/permission_list','Admin\SystemManageController@permission_list');