<?php

namespace App\Http\Controllers\Blog\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Redirect;
use App\Model\User;
use App\Model\permission;
use Validator;

class SystemManageController extends Controller
{
//    管理员管理
    public function admin_list(Request $request){
        if($request->ajax()){

        }else{
            $admins = User::paginate(3);
            return view('Blog.Admin.adminManage.admin_list')->with('admins',$admins);
        }
    }
//    角色管理
    public function role_list(){
        return view('Blog.Admin.roleManage.role_list');
    }
//    权限管理
    public function permission_list(){
        $permissions = Permission::paginate(3);
        return view('Blog.Admin.permissionManage.permission_list')->with('permissions',$permissions);
    }
    public function permission_create(Request $request){
//        ajax为验证权限是否已存在
        if($request->ajax()){

        }else{
            $data['permission_name'] = $request->input('permission_name');
            $data['permission_url'] = $request->input('permission_url');
            $data['description'] = $request->input('description');
            $result = Permission::create($data);
            dd($request);
        }
    }
}
