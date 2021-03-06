<?php
/**
 * Created by PhpStorm.
 * User: xuewen.zeng
 * Date: 2017/8/4
 * Time: 15:09
 */
?>
@extends('Blog.Admin.Layout.layout')
@section('content')
    <!-- start: BREADCRUMB -->
    <div class="breadcrumb-wrapper">
        <h4 class="mainTitle no-margin">邮件推送</h4>
        <ul class="pull-right breadcrumb">
            <li>
                <a href="/blog/admin/dashboard"><i class="fa fa-home margin-right-5 text-large text-dark"></i>主页</a>
            </li>
            <li>
                邮件推送
            </li>
        </ul>
    </div>
    <!-- end: BREADCRUMB -->
    <hr />
    <div class="panel panel-white">
        <div class="panel-body">
            <div class="tabbable">
                <ul id="myTab1" class="nav nav-tabs">
                    <li>
                        <a href="{{ Route('sendOnlyText') }}"> 发送纯文本信息 </a>
                    </li>
                    <li class="active">
                        <a href="{{ Route('sendEmail') }}"> 简单邮件(固定blade+变量) </a>
                    </li>
                    <li>
                        <a href="{{ Route('queueEmail') }}"> 队列邮件 </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active">
                        <form class="form-horizontal" enctype="multipart/form-data" action="{{ Route('sendEmail') }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label class="col-sm-2 control-label">收件人</label>
                                <input class="col-sm-6" name="useremail" type="email" placeholder="邮箱账号" required/>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">邮件主题</label>
                                <input class="col-sm-6" name="subject" type="text" placeholder="邮件主题"/>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">附件</label>
                                <input type="file" name="enclosure">
                            </div>
                            <div class="form-group">
                                <input class="btn btn-o btn-primary col-sm-offset-2" type="submit" value="发送">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
