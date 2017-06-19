@extends('Admin.Login.layout')
@section('title','Login')
@section('content')
<div id="form" class="animate form">
    <form  action="{{ Route('login') }}" autocomplete="on" method="post">
        {{ csrf_field() }}
        <h1>登录</h1>
        <p>
            <input id="username" name="username" required="required" type="text" placeholder="邮箱/用户名" value="{{ old('username') }}"/>
        </p>
        @if(!empty(session('errors')))
            <span> {{ session('error') }}</span>
        @endif
        @if($errors->has('username'))
            <span>{{ $errors->first('username') }}</span>
        @endif
        <p>
            <input id="password" name="password" required="required" type="password" placeholder="密码" />
        </p>
        @if($errors->has('username'))
            <span>{{ $errors->first('password') }}</span>
        @endif
        <p class="keeplogin">
            <input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" />
            <label for="loginkeeping">记住我</label>
        </p>
        <p class="login button">
            <input type="submit" value="登录" />
        </p>
        <p class="change_link">
            <a href="/register" class="to_register">注册</a>
        </p>
    </form>
</div>
@endsection