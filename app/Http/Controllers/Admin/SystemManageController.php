<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SystemManageController extends Controller
{
//    管理员管理
    public function admin_list(Request $request){
        if($request->ajax()){

        }
        return view('Admin.adminManage.admin_list');
    }
//    角色管理
    public function role_list(){

    }
//    权限管理
    public function permission_list(){

    }
}
