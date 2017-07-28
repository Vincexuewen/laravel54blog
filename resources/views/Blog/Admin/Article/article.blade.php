<?php
/**
 * Created by PhpStorm.
 * User: xuewen.zeng
 * Date: 2017/7/28
 * Time: 10:22
 */
?>
@extends('Blog.Admin.Layout.layout')
@section('my-css')
   <style>
       img{
           cursor: pointer;
           transition: all 0.6s;
       }
       img:hover{
           transform: scale(3);
       }
   </style>
@endsection
@section('content')
    <!-- start: BREADCRUMB -->
    <div class="breadcrumb-wrapper">
        <h4 class="mainTitle no-margin">文章管理</h4>
        <ul class="pull-right breadcrumb">
            <li>
                <a href="/admin/dashboard"><i class="fa fa-home margin-right-5 text-large text-dark"></i>主页</a>
            </li>
            <li>
                文章列表
            </li>
        </ul>
    </div>
    <!-- end: BREADCRUMB -->
    <hr />
    {{-- start: article-table --}}
    <div class="panel panel-white">
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12 space20">
                    <a href="/admin/Content-Manage/Article-Manage/create">
                        <button class="btn btn-green add-row">
                            <i class="fa fa-plus"></i>&nbsp;&nbsp;发布文章
                        </button>
                    </a>
                </div>
            </div>
            <table class="table table-striped table-bordered table-hover" id="articles">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>文章标题</th>
                    <th>封面图片</th>
                    <th>所属分类</th>
                    <th>浏览量</th>
                    <th>发表时间</th>
                    <th>更新时间</th>
                    <th>状态</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                @foreach($articles as $article)
                <tr>
                    <td>{{ $article->ar_id }}</td>
                    <td>{{ $article->ar_title }}</td>
                    <td style="text-align: center"><img width="60%" height="6%" src="/{{ $article->ar_img_url }}" /></td>
                    <td>{{ $article->ar_class_id }}</td>
                    <td>{{ $article->ar_hits }}</td>
                    <td>{{ $article->created_at }}</td>
                    <td>{{ $article->updated_at }}</td>
                    <td>
                        @if($article->ar_status == 1)
                        <span class="label label-info">已发布</span>
                        @else
                        <span class="label label-default">草稿</span>
                        @endif
                    </td>
                    <td>
                        <a href="/admin/Content-Manage/Article-Manage/edit/{{$article->ar_id}}" class="btn mg0 btn-green btn-xs"><i class="fa fa-paste"></i>编辑</a>&nbsp;
                        <a onclick="del(this,{{ $article->ar_id }},'/admin/Content-Manage/Article-Manage/delete')" class="btn mg0 btn-danger btn-xs J_del"><i class="fa fa-times"></i>删除</a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{-- end: article-table --}}
@endsection
@section('my-js')
    <script>
        jQuery(document).ready(function() {
            $('#articles').dataTable({
                "lengthChange": false,
                'autowidth':false,
                "columnDefs": [
                    { "width": "15%", "targets": 2 },
                    { "width": "7%", "targets": 7 },
                    { "width": "11%", "targets": 8 }
                ]
            });
        });
    </script>
@endsection
