<?php
/**
 * Created by PhpStorm.
 * User: xuewen.zeng
 * Date: 2017/7/27
 * Time: 17:52
 */
?>
@extends('Blog.Reception.Layout.layout')
@section('content')
    <div class="content">
        {{--轮播图--}}
        @include('Blog.Reception.Public.public_banner')
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
