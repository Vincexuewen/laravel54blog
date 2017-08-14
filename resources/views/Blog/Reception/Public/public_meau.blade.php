<?php
/**
 * Created by PhpStorm.
 * User: xuewen.zeng
 * Date: 2017/7/27
 * Time: 17:47
 */
?>
<div class="collapse navbar-collapse" id="header-navbar">
    <ul class="nav navbar-nav navbar-right">
        <li class="{{ Request::is('/') ? 'active' : '' }}"><a data-cont="首页" href="/">首页</a></li>
        @foreach($meaus as $meau)
            <li class="{{ Request::is($meau->ar_class_name.'*') ? 'active' : '' }}"><a href="/{{ $meau->ar_class_name }}">{{ $meau->c_name }}</a></li>
        @endforeach
        <li class="{{ Request::is('/share.html') ? 'active' : '' }}"><a href="/share.html">日记</a></li>
    </ul>
</div>
