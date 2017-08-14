<?php
/**
 * Created by PhpStorm.
 * User: xuewen.zeng
 * Date: 2017/8/14
 * Time: 15:52
 */
?>
@extends('Blog.Admin.Layout.layout')
@section('content')
    <!-- start: BREADCRUMB -->
    <div class="breadcrumb-wrapper">
        <h4 class="mainTitle no-margin">日记管理</h4>
        <ul class="pull-right breadcrumb">
            <li>
                <a href="/blog/admin/dashboard"><i class="fa fa-home margin-right-5 text-large text-dark"></i>主页</a>
            </li>
            <li>
                日记列表
            </li>
        </ul>
    </div>
    <!-- end: BREADCRUMB -->
    <hr />
    {{-- start: banner-table --}}
    <div class="panel panel-white">
        <div class="panel-body">
            @include('partial.error')
            <div class="row">
                <div class="col-md-12 space20">
                    <a>
                        <button class="btn btn-green add-row" data-toggle="modal" data-target="#myModal">
                            <i class="fa fa-plus"></i>&nbsp;&nbsp;日记添加
                        </button>
                    </a>
                </div>
            </div>
            <table class="table table-striped table-bordered table-hover" id="diarys">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>标题</th>
                    <th>发表时间</th>
                    <th>更新时间</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                @foreach($diarys as $diary)
                    <tr>
                        <td>{{ $diary->id }}</td>
                        <td>{{ $diary->title }}</td>
                        <td>{{ $diary->created_at }}</td>
                        <td>{{ $diary->updated_at }}</td>
                        <td>
                            <a href="/blog/admin/Content-Manage/Diary-Manage/edit/{{$diary->id}}" class="btn mg0 btn-green btn-xs"><i class="fa fa-paste"></i>编辑</a>&nbsp;
                            <a onclick="del(this,{{ $diary->id }},'/blog/admin/Content-Manage/Diary-Manage/delete')" class="btn mg0 btn-danger btn-xs J_del"><i class="fa fa-times"></i>删除</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{-- end: banner-table --}}
    {{--modal-start--}}
    <div class="row modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">轮播图添加</h4>
                </div>
                <form role="form" method="post" enctype="multipart/form-data" action="/blog/admin/Content-Manage/Diary-Manage/create">
                    <div class="modal-body">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label> 标题</label>
                            <input type="text" class="form-control" id="order" name="order" required>
                        </div>
                        <div class="form-group">
                            <label> 内容</label>
                            <textarea class="form-control" rows="3" required>

                            </textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                        <button type="submit" class="btn btn-o btn-primary pull-right">提交</button>
                    </div>
                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal -->
    </div>
    {{--modal-end--}}
@endsection
@section('my-js')
    <script>
        jQuery(document).ready(function() {
            $('#diarys').dataTable({
                "lengthChange": false,
                'autowidth':false,
                "columnDefs": [
                    { "width": "11%", "targets": 4 }
                ]
            });
        });
    </script>
    @include('partial.success')
@endsection