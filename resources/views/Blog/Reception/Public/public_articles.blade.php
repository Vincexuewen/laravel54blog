<?php
/**
 * Created by PhpStorm.
 * User: xuewen.zeng
 * Date: 2017/7/27
 * Time: 17:06
 */
?>
@foreach($articles as $article)
<article class="excerpt" style="margin-bottom: 1%;">
    <a class="focus" href="/{{ $article->ar_id }}" title="">
        <img class="thumb" data-original="/{{ $article->ar_img_url }}" src="/{{ $article->ar_img_url }}" alt="">
    </a>
    <header>
        <a class="cat" href="program">{{ $article->ar_class_name }}</a>
        <h2>
            <a href="/{{ $article->ar_id }}" title="">{{ $article->ar_title }}</a>
        </h2>
    </header>
    <p class="meta">
        <time class="time" title="发布时间"><i class="glyphicon glyphicon-time"></i> {{ $article->created_at }}</time>
        <span class="views" title="浏览量"><i class="glyphicon glyphicon-eye-open"></i> {{ $article->ar_hits }}</span>
        <a class="comment" href="" title="评论"><i class="glyphicon glyphicon-comment"></i> 评论</a>
    </p>
    <div class="note" style="font-size: 14px;height: 60px;overflow:hidden;">
        {!! $article->ar_content !!}
    </div>
    <span class="pull-right"><a href="/{{ $article->ar_id }}"><button type="button" class="btn btn-primary">阅读全文</button></a></span>
</article>
@endforeach
{!! $articles->links() !!}
