<?php
/**
 * Created by PhpStorm.
 * User: xuewen.zeng
 * Date: 2017/8/2
 * Time: 15:41
 */
?>
@extends('Blog.Admin.Layout.layout')
@section('content')
    <!-- start: BREADCRUMB -->
    <div class="breadcrumb-wrapper">
        <h4 class="mainTitle no-margin">轮播图管理</h4>
        <ul class="pull-right breadcrumb">
            <li>
                <a href="/blog/admin/dashboard"><i class="fa fa-home margin-right-5 text-large text-dark"></i>主页</a>
            </li>
            <li>
                <a href="/blog/admin/Content-Manage/Banner-Manage"><i class="fa fa-book margin-right-5 text-large text-dark"></i>轮播图列表</a>
            </li>
            <li>
                轮播图编辑
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
                        <form role="form" method="post" enctype="multipart/form-data" action="/blog/admin/Content-Manage/Banner-Manage/edit/{{ $banner->id }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label> 轮播图</label>
                                <input type="file" class="form-control" id="img_url" name="img_url">
                            </div>
                            <div class="form-group">
                                <label> 排序</label>
                                <input type="text" class="form-control" id="order" name="order" value="{{ $banner->order }}">
                            </div>
                            <div class="form-group">
                                <label class="control-label">状态<span class="symbol required"></span></label>
                                <div class="clip-radio radio-primary">
                                    <input type="radio" id="status_1" name="status" value="1" @if($banner->status == 1) checked @endif required>
                                    <label for="status_1">启用</label>
                                    <input type="radio" id="status_2" name="status" value="2" @if($banner->status == 2) checked @endif>
                                    <label for="status_2">禁用</label>
                                </div>
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
