<?php
/**
 * Created by PhpStorm.
 * User: xuewen.zeng
 * Date: 2017/6/20
 * Time: 10:05
 */
?>
@extends('Admin.Layout.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-cogs"></i> 系统管理</h3>
            <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="index.html">主页</a></li>
                <li><i class="fa fa-cogs"></i>系统管理</li>
                <li><i class="fa fa-cog"></i>权限管理</li>
            </ol>
        </div>
    </div>
    @include('partial.success')
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="col-sm-2" style="width: 100px">
                                <div class="input-group">
                                    <button data-toggle="modal" data-target="#permission_create" class="btn btn-outline btn-primary" type="button">添加权限</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="table table-striped table-bordered table-hover adminlist">
                        <thead>
                        <tr>
                            <th>权限名称</th>
                            <th>权限规则</th>
                            <th>权限描述</th>
                            <th>创建时间</th>
                            <th>更新时间</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($permissions as $permission)
                            <tr>
                                <td>{{ $permission->permission_name }}</td>
                                <td>{{ $permission->permission_url }}</td>
                                <td>{{ $permission->description }}</td>
                                <td>{{ $permission->created_at }}</td>
                                <td>{{ $permission->updated_at }}</td>
                                <td>
                                    <a href="/Admin/management/admin-management/Admin_edit_page" class="btn mg0 btn-primary btn-xs"><i class="fa fa-paste"></i>编辑</a>&nbsp;
                                    <a class="btn mg0 btn-danger btn-xs"><i class="fa fa-times"></i>删除</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <span class="pull-left">{{ $permissions->links() }}</span>
                </div>
            </div>
        </div>
    </div>
    {{--模态框--}}
    <div class="modal fade" id="permission_create" role="dialog" aria-hidden="true">
        <div class="modal-dialog" style="width: 60%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        &times;
                    </button>
                </div>
                <div class="modal-body">
                    <form id="permission" method="post" action="/Admin/system_manage/permission_manage/permission_create">
                        <input id="token" type="hidden" name="_token" value="{{ csrf_token() }}"/>
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="form-group">
                                    <label>权限规则 *</label>
                                    <input id="name" name="permission_url" type="text" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="form-group">
                                    <label>权限名称</label>
                                    <input id="display_name" name="permission_name" type="text" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="form-group">
                                    <label>权限描述</label>
                                    <input id="description" name="description" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">关闭
                            </button>
                            <button type="submit" class="btn btn-primary">
                                提交
                            </button>
                        </div>
                    </form>
                </div>
            <!-- /.modal-content -->
            </div>
        <!-- /.modal -->
        </div>
    </div>
@endsection
