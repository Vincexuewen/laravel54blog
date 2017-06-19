<?php
/**
 * Created by PhpStorm.
 * User: xuewen.zeng
 * Date: 2017/6/16
 * Time: 14:05
 */
?>
@extends('Admin.Login.layout')
@section('title','Register')
@section('content')
    <div id="form" class="animate form">
        <form  action="{{ Route('register') }}" autocomplete="on" method="post">
            {{ csrf_field() }}
            <h1>注册</h1>
            <p>
                <input id="username" name="username" required="required" type="text" placeholder="设置您的用户名" value="{{ old('username') }}"/>
            </p>
            @if($errors->has('username'))
                <span>{{ $errors->first('username') }}</span>
            @endif
            <p>
                <input id="email" name="email" required="required" type="email" placeholder="请输入邮箱" value="{{ old('email') }}"/>
            </p>
            @if($errors->has('email'))
                <span>{{ $errors->first('email') }}</span>
            @endif
            <p>
                <input id="password" name="password" required="required" type="password" placeholder="设置您的登录密码"/>
            </p>
            @if($errors->has('password'))
                <span>{{ $errors->first('password') }}</span>
            @endif
            <p>
                <input id="password_confirmation" name="password_confirmation" required="required" type="password" placeholder="请再次输入您的密码"/>
            </p>
            @if($errors->has('password_confirm'))
                <span>{{ $errors->first('password_confirm') }}</span>
            @endif
            <p class="signin button">
                <input type="submit" value="注册"/>
            </p>
            <p class="change_link">
                <a href="/login" class="to_register">登录</a>
            </p>
        </form>
    </div>
@endsection
