<?php
/**
 * Created by PhpStorm.
 * User: xuewen.zeng
 * Date: 2017/7/27
 * Time: 17:00
 */
?>
<div id="focusslide" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        @foreach($banners as $k=>$banner)
        <li data-target="#focusslide" data-slide-to="{{ $k }}" class="{{ $k ? '' : 'active' }}"></li>
        @endforeach
    </ol>
    <div class="carousel-inner" role="listbox">
        @foreach($banners as $k=>$banner)
            <div class="item {{ $k ? '' : 'active' }}">
                <a><img src="/{{ $banner->banner_url }}" alt="" class="img-responsive"></a>
                <!--<div class="carousel-caption"> </div>-->
            </div>
        @endforeach
    </div>
    <a class="left carousel-control" href="#focusslide" role="button" data-slide="prev" rel="nofollow">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">上一个</span>
    </a>
    <a class="right carousel-control" href="#focusslide" role="button" data-slide="next" rel="nofollow">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">下一个</span>
    </a>
</div>
