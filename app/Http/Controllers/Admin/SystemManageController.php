<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\User;
use App\Model\permission;

class SystemManageController extends Controller
{
//    管理员管理
    public function admin_list(Request $request){
        if($request->ajax()){

        }else{
            $admins = User::paginate(3);
            return view('Admin.adminManage.admin_list')->with('admins',$admins);
        }
    }
//    角色管理
    public function role_list(){
        return view('Admin.roleManage.role_list');
    }
//    权限管理
    public function permission_list(){
        $permissions = Permission::paginate(3);
        return view('Admin.permissionManage.permission_list')->with('permissions',$permissions);
    }
}
