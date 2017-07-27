<?php
/**
 * Created by PhpStorm.
 * User: xuewen.zeng
 * Date: 2017/7/27
 * Time: 16:27
 */
?>
<!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>异清轩博客</title>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('blog/reception/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('blog/reception/css/nprogress.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('blog/reception/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('blog/reception/css/font-awesome.min.css') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ URL::asset('blog/reception//blog/reception/images/icon/icon.png') }}">
    <link rel="shortcut icon" href="{{ URL::asset('blog/reception//blog/reception/images/icon/favicon.ico') }}">
    <script src="{{ URL::asset('blog/reception/js/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ URL::asset('blog/reception/js/nprogress.js') }}"></script>
    <script src="{{ URL::asset('blog/reception/js/jquery.lazyload.min.js') }}"></script>
    <!--[if gte IE 9]>
    <script src="{{ URL::asset('blog/reception/js/jquery-1.11.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('blog/reception/js/html5shiv.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('blog/reception/js/respond.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('blog/reception/js/selectivizr-min.js') }}" type="text/javascript"></script>
    <![endif]-->
    <!--[if lt IE 9]>
    <script>window.location.href='upgrade-browser.html';</script>
    <![endif]-->
</head>

<body class="user-select">
<header class="header">
    <nav class="navbar navbar-default" id="navbar">
        <div class="container">
            {{--laber--}}
            @include('Blog.Reception.Public.public_laber')
            {{--logo--}}
            @include('Blog.Reception.Public.public_logo')
            {{--菜单栏--}}
            @include('Blog.Reception.Public.public_meau')
        </div>
    </nav>
</header>
<section class="container">
    {{--左侧内容--}}
    <div class="content-wrap">
        @yield('content')
    </div>
    {{--右侧内容--}}
    <aside class="sidebar">
        {{--搜索框--}}
        <div class="fixed">
            @include('Blog.Reception.Public.public_search')
        </div>
        {{--热门文章--}}
        @include('Blog.Reception.Public.public_hot_articles')
    </aside>
</section>
{{--底部信息--}}
@include('Blog.Reception.Public.public_footer')
<!--微信二维码模态框-->
<div class="modal fade user-select" id="WeChat" tabindex="-1" role="dialog" aria-labelledby="WeChatModalLabel">
    <div class="modal-dialog" role="document" style="margin-top:120px;max-width:280px;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="WeChatModalLabel" style="cursor:default;">微信扫一扫</h4>
            </div>
            <div class="modal-body" style="text-align:center"> <img src="/blog/reception/images/weixin.jpg" alt="" style="cursor:pointer"/> </div>
        </div>
    </div>
</div>
<!--该功能正在日以继夜的开发中-->
<div class="modal fade user-select" id="areDeveloping" tabindex="-1" role="dialog" aria-labelledby="areDevelopingModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="areDevelopingModalLabel" style="cursor:default;">该功能正在日以继夜的开发中…</h4>
            </div>
            <div class="modal-body"> <img src="/blog/reception/images/baoman/baoman_01.gif" alt="深思熟虑" />
                <p style="padding:15px 15px 15px 100px; position:absolute; top:15px; cursor:default;">很抱歉，程序猿正在日以继夜的开发此功能，本程序将会在以后的版本中持续完善！</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">朕已阅</button>
            </div>
        </div>
    </div>
</div>
<!--登录注册模态框-->
<div class="modal fade user-select" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="/Admin/Index/login" method="post">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="loginModalLabel">登录</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="loginModalUserNmae">用户名</label>
                        <input type="text" class="form-control" id="loginModalUserNmae" placeholder="请输入用户名" autofocus maxlength="15" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label for="loginModalUserPwd">密码</label>
                        <input type="password" class="form-control" id="loginModalUserPwd" placeholder="请输入密码" maxlength="18" autocomplete="off" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                    <button type="submit" class="btn btn-primary">登录</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="{{ URL::asset('blog/reception/js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('blog/reception/js/jquery.ias.js') }}"></script>
<script src="{{ URL::asset('blog/reception/js/scripts.js') }}"></script>
</body>
</html>
