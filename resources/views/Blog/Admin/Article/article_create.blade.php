<?php
/**
 * Created by PhpStorm.
 * User: xuewen.zeng
 * Date: 2017/7/28
 * Time: 14:07
 */
?>
@extends('Blog.Admin.Layout.layout')
@section('content')
    <!-- start: BREADCRUMB -->
    <div class="breadcrumb-wrapper">
        <h4 class="mainTitle no-margin">文章管理</h4>
        <ul class="pull-right breadcrumb">
            <li>
                <a href="/admin/dashboard"><i class="fa fa-home margin-right-5 text-large text-dark"></i>主页</a>
            </li>
            <li>
                <a href="/admin/Content-Manage/Article-Manage"><i class="fa fa-book margin-right-5 text-large text-dark"></i>文章列表</a>
            </li>
            <li>
                文章添加
            </li>
        </ul>
    </div>
    <!-- end: BREADCRUMB -->
    <div class="container-fluid container-fullw">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-white">
                    <div class="panel-body">
                        @include('partial.error')
                        <form role="form" method="post" enctype="multipart/form-data" action="/blog/admin/Content-Manage/Article-Manage/create">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label> 文章标题<span class="symbol required"></span></label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="文章标题">
                            </div>
                            <div class="form-group">
                                <label> 封面图片<span class="symbol required"></span></label>
                                <input type="file" class="form-control" id="img_url" name="img_url">
                            </div>
                            <div class="form-group">
                                <label class="control-label">文章类别<span class="symbol required"></span></label>
                                <div class="clip-radio radio-primary">
                                    @foreach($articles_class as $article_class)
                                    <input type="radio" id="{{ $article_class->ar_class_id }}" name="type" value="{{ $article_class->ar_class_id }}">
                                    <label for="{{ $article_class->ar_class_id }}"> {{ $article_class->ar_class_name }} </label>
                                    @endforeach
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">文章状态<span class="symbol required"></span></label>
                                <div class="clip-radio radio-primary">
                                    <input type="radio" id="status_1" name="status" value="1">
                                    <label for="status_1">发布</label>
                                    <input type="radio" id="status_2" name="status" value="2">
                                    <label for="status_2">保存为草稿</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label"> 文章内容<span class="symbol required"></span></label>
                                <textarea class="form-group" style="width: 100%;" rows="10" id="content" name="content">
                                </textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-o btn-primary pull-right">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('my-js')
    <script src="{{ URL::asset('plugins/ueditor1_4_3_3/ueditor.config.js') }}"></script>
    <script src="{{ URL::asset('plugins/ueditor1_4_3_3/ueditor.all.js') }}"></script>
    <script>
        jQuery(document).ready(function() {
            var ue = UE.getEditor('content',{
                enableAutoSave: false,
            });
        });
    </script>
@endsection
