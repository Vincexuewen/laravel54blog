<?php
/**
 * Created by PhpStorm.
 * User: xuewen.zeng
 * Date: 2017/8/1
 * Time: 13:52
 */
?>
@extends('Blog.Reception.Layout.layout')
@section('css')
    <style>
        .child-cat{
            margin:0 0 5px 0;
        }
        .child-cat a{
            display:block;overflow:hidden;padding:0 5px;border:1px solid #ddd;border-radius:2px;background:#fff;box-shadow:0 1px 1px rgba(0,0,0,.04);text-align:center;text-overflow:ellipsis;white-space:nowrap;word-wrap:normal;line-height:30px;transition-duration:.5s;}
        .child-cat a:hover{
            border:1px solid #2f889a;background:#2f889a;color:#fff!important;transition:all .1s ease-in 0s;
        }
    </style>
@endsection
@section('header')
    @include('Blog.Reception.Public.public_header')
@endsection
@section('content')
    <div class="content">
        {{--文章列表--}}
        @include('Blog.Reception.Public.public_articles')
    </div>
@endsection
@section('sidebar')
    {{--搜索框--}}
    <div class="fixed">
        @include('Blog.Reception.Public.public_search')
    </div>
    {{--热门文章--}}
    @include('Blog.Reception.Public.public_hot_articles')
@endsection
