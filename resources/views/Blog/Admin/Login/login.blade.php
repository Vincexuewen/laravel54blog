@extends('Blog.Admin.Login.layout')
@section('form')
    <div class="panel panel-info">
        <div class="panel-heading">登录</div>
        <div class="panel-body">
            @include('partial.error')
            @include('partial.success')
            @if(Session::has('login_error'))
                <div class="alert alert-danger">
                    <ul>
                        <li>{{ session('login_error') }}</li>
                    </ul>
                </div>
            @endif
            <form class="form-horizontal" role="form" method="POST" action="/admin/login">
                {{ csrf_field() }}
            <div class="form-group">
                <label for="email" class="col-md-4 control-label">邮箱</label>
                <div class="col-md-6">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-md-4 control-label">密码</label>
                <div class="col-md-6">
                    <input id="password" type="password" class="form-control" name="password">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember"> 记住我
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-8 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        登录
                    </button>
                    <a class="btn btn-link" href="">
                        忘记密码?
                    </a>
                </div>
            </div>
        </form>
        </div>
    </div>
@endsection