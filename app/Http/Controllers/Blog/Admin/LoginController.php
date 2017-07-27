<?php

namespace App\Http\Controllers\Blog\Admin;

use App\Model\Blog\Users;
use Validator;
use Auth;
use Redirect;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    //
    public function showloginform(){
        return view('Blog.Admin.Login.login');
    }

    public function login(Request $request){
//验证数据
        $validator = Validator::make($request->all(),[
            'email' => 'required',
            'password' => 'required',
        ])->validate();
//验证通过后判断账号密码
        if(!Auth::guard('blog')->attempt(['email' => $request->input('email'),'password' => $request->input('password')])) {
//withInput()带所有的值返回
            return Redirect::back()->withInput()->with('login_error','邮箱和密码不匹配');
        }
        return redirect()->route('dashaboard');
    }
}
