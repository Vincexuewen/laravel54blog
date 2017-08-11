<?php
/**
 * Created by PhpStorm.
 * User: xuewen.zeng
 * Date: 2017/8/8
 * Time: 11:28
 */
?>
@extends('Blog.Admin.Layout.layout')
@section('content')
    <!-- start: BREADCRUMB -->
    <div class="breadcrumb-wrapper">
        <h4 class="mainTitle no-margin">文件上传</h4>
        <ul class="pull-right breadcrumb">
            <li>
                <a href="/blog/admin/dashboard"><i class="fa fa-home margin-right-5 text-large text-dark"></i>主页</a>
            </li>
            <li>
                文件上传
            </li>
        </ul>
    </div>
    <!-- end: BREADCRUMB -->
    <hr />
    <div class="panel panel-white">
        <div class="panel-body">
            <div class="alert alert-danger">
                <ul>
                    <li><p>$file->move()：文件可以移动到任意位置</p></li>
                    <li><p>$file->storeAs()：文件只能移动Storage\app路径下的任意位置</p></li>
                </ul>
            </div>
            <div class="tabbable">
                <ul id="myTab1" class="nav nav-tabs">
                    <li class="active">
                        <a href="{{ Route('upload') }}"> 文件上传到公共目录public </a>
                    </li>
                    <li>
                        <a href="{{ Route('storageUpload') }}"> 第二种storage </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active">
                        <fieldset>
                            <legend>文件上传</legend>
                            <form class="form-horizontal" action="{{ Route('upload') }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                <span class="btn btn-wide btn-dark-grey fileinput-button col-sm-offset-2" id="por_group">
                                    <span id="filename"> <i class="glyphicon glyphicon-plus">&nbsp;</i>文件上传</span>
                                    <input type="file" name="fileupload" id="file" >
                                </span>
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-o btn-primary col-sm-offset-2" type="submit" value="上传">
                                </div>
                            </form>
                        </fieldset>
                        <table class="table table-condensed table-hover" id="sample-table-4">
                            <thead>
                                <tr>
                                    <th class="hidden-xs">ID</th>
                                    <th><i class="fa fa-time"></i> 项目 </th>
                                    <th class="hidden-xs">时间</th>
                                    <th class="hidden-xs">状态</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($datas as $data)
                                    <tr>
                                        <td>{{ $data->id }}</td>
                                        <td class="hidden-xs"><a target="_blank" href="/blog/admin/Function-Manage/Upload-File/responseUpload/{{ $data->filename }}">{{ $data->filename }}</a></td>
                                        <td>{{ $data->created_at }}</td>
                                        <td class="hidden-xs"><span class="label label-sm label-warning">第一种上传</span></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('my-js')
    <script>
        document.getElementById("file").onchange = function () {
//          js获取文件名
            document.getElementById("filename").textContent = this.value.replace(/^C:\\fakepath\\/i, '');
            document.getElementById("por_group").className="btn btn-wide btn-success fileinput-button col-sm-offset-2";
        };
    </script>
@endsection

