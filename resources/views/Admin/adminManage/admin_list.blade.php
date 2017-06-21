<?php
/**
 * Created by PhpStorm.
 * User: xuewen.zeng
 * Date: 2017/6/19
 * Time: 17:49
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
                <li><i class="fa fa-user"></i>管理员管理</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-2" style="width: 100px">
                            <div class="input-group">
                                <button data-toggle="modal" data-target="#adminadd" class="btn btn-outline btn-primary" type="button">添加管理员</button>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-bordered table-hover adminlist">
                    <thead>
                    <tr>
                        <th>管理员名称</th>
                        <th>邮箱</th>
                        <th>创建者</th>
                        <th>状态</th>
                        <th>创建时间</th>
                        <th>更新时间</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </div>
@endsection