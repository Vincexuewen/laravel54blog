<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>@yield('title')</title>
    {{--bootstrap3.3.7-main(START)--}}
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/bootstrap/css/bootstrap.min.css') }}">
    {{--END--}}
    <link rel="stylesheet" href="{{ URL::asset('blog/admin/bower_components/toastr/toastr.min.css') }}">
    {{--Jquery3.2.1(START)--}}
    <script src="{{ URL::asset('/js/jquery/jquery-3.2.1.min.js') }}"></script>
    {{--END--}}
    {{--bootstrap3.3.7-main(START)--}}
    <script src="{{ URL::asset('/bootstrap/js/bootstrap.min.js') }}"></script>
    {{--END--}}
    <script src="{{ URL::asset('blog/admin/bower_components/toastr/toastr.min.js') }}"></script>
</head>
<body>
<div>
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand">博客管理</a>
            </div>
            <div class="collapse navbar-collapse">
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="/admin/login">登录</a>
                    </li>
                    <li>
                        <a href="/admin/register">注册</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @yield('form')
            </div>
        </div>
    </div>
</div>
</body>
</html>