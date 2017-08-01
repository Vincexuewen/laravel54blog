<?php
/**
 * Created by PhpStorm.
 * User: xuewen.zeng
 * Date: 2017/8/1
 * Time: 14:18
 */
?>
@extends('Blog.Reception.Layout.layout')
@section('css')
    <style>
        .content{
            padding: 0 20px;
            background-color: #fff;
            border: 1px solid #EAEAEA;
            border-radius: 4px;
        }
    </style>
@endsection
@section('content')
    <div class="content">
        <header class="article-header">
            <h1 class="article-title">
                <a>{{ $article->ar_title }}</a>
            </h1>
            <div class="article-meta">
		        <span class="item article-meta-time">
                    <time class="time" data-toggle="tooltip" data-placement="bottom" title="时间">
                        <i class="glyphicon glyphicon-time"></i> {{ $article->created_at }}
                    </time>
                </span>
                <span class="item article-meta-category" data-toggle="tooltip" data-placement="bottom" title="类别">
          	        <i class="glyphicon glyphicon-list"></i>
          	        <a>{{ $article->ar_class_name }}</a>
                </span>
                <span class="item article-meta-views" data-toggle="tooltip" data-placement="bottom" title="点击量">
          	        <i class="glyphicon glyphicon-eye-open"></i> {{ $article->ar_hits }}
                </span>
            </div>
        </header>
        <!--文章内容-->
        <article class="article-content">
             {!! $article->ar_content !!}
        </article>
        <!--上下篇文章-->
        <hr />
        <div class="relates" style="margin: 40px;">
            <div class="title">
                <h5>上一篇：@if(empty($prev_article)) 没有了 @else <a href="/{{ $prev_article->ar_id }}">{{ $prev_article->ar_title }}</a> @endif</h5>
            </div>
            <div class="title">
                <h5>下一篇：@if(empty($next_article)) 没有了 @else <a href="/{{ $next_article->ar_id }}">{{ $next_article->ar_title }}</a> @endif</h5>
            </div>
        </div>
        <hr />
        <!--评论框-->
        <div id="respond">
            <!--PC版-->
            <div id="SOHUCS" sid="{$article.ar_id}"></div>
            <script charset="utf-8" type="text/javascript" src="https://changyan.sohu.com/upload/changyan.js" ></script>
            <script type="text/javascript">
                window.changyan.api.config({
                    appid: 'cyt87rbJS',
                    conf: 'prod_1cf5288c7bcbe34aab27a8f0ae3213bf'
                });
            </script>
        </div>
    </div>
@endsection
