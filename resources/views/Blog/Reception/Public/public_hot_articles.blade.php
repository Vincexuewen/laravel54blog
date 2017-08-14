<?php
/**
 * Created by PhpStorm.
 * User: xuewen.zeng
 * Date: 2017/7/27
 * Time: 17:19
 */
?>
<div class="widget widget_hot">
    <h3>热门文章</h3>
    @foreach($articles_hot as $article_hot)
        <ul>
            <li>
                <a href="/{{ $article_hot->ar_id }}">
                    <span class="thumbnail">
                        <img class="thumb" data-original="/{{ $article_hot->ar_img_url }}" src="/{{ $article_hot->ar_img_url }}" alt="">
                    </span>
                    <span class="text">{{ $article_hot->ar_title }}</span>
                    <span class="muted"><i class="glyphicon glyphicon-time"></i> {{ \Carbon\Carbon::parse($article_hot->created_at)->diffForHumans() }}</span>
                    <span class="muted"><i class="glyphicon glyphicon-eye-open"></i> {{ $article_hot->ar_hits }}</span>
                </a>
            </li>
        </ul>
    @endforeach
</div>
