<?php

namespace App\Http\Controllers\Admin;

use User;
use Validator;
use Auth;
use Redirect;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    //
    public function showloginform(){
        return view('Admin.Login.login');
    }

    public function login(Request $request){
//        验证数据
        $validator = Validator::make($request->all(),[
            'username' => 'required',
            'password' => 'required',
        ])->validate();
//      验证通过后判断账号密码
        if(!Auth::attempt(['username' => $request->input('username'),'password' => $request->input('password')])) {
            //withInput()带所有的值返回
            return Redirect::back()->withInput($request->all())->with('errors','用户名和密码不匹配');
        }
        return redirect('/dashboard');
    }
}
