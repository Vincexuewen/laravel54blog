<?php

namespace App\Http\Controllers\Blog\Admin;

use App\User;
use Session;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    //
    public function showregisterform(){
        return view('Blog.Admin.Login.register');
    }
    public function register(Request $request){

//        验证数据
//        Validator::make($input,$rules,$message)
        $validator = Validator::make($request->all(),[
            'username' => 'required|max:12|unique:users',
            'email' => 'required|unique:users',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
        ])->validate();

//        插入数据
        $res = User::create([
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);
//        判断是否插入成功并返回登录界面
        if($res){
            return redirect()->route('showloginform')->withsuccess('注册成功！');
        }else{
            abort(500);
        }
    }
}
