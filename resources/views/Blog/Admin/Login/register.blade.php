@extends('Blog.Admin.Login.layout')
@section('form')
    <div class="panel panel-info">
        <div class="panel-heading">注册</div>
        <div class="panel-body">
            @include('partial.error')
            <form class="form-horizontal" role="form" method="POST" action="/blog/admin/register">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="username" class="col-md-4 control-label">用户名</label>
                    <div class="col-md-6">
                        <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-md-4 control-label">邮箱</label>
                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-md-4 control-label">密码</label>
                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control" name="password" required="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password_confirmation" class="col-md-4 control-label">确认密码</label>
                    <div class="col-md-6">
                        <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required="">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-8 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            注册
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection