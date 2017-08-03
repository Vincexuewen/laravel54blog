<?php
/**
 * Created by PhpStorm.
 * User: xuewen.zeng
 * Date: 2017/8/1
 * Time: 15:59
 */
?>
<div class="container">
    <ul class="child-cat" style="margin-bottom: 4%;">
        @foreach($subs_class as $sub_class)
        <li style="width: 15%;margin-right: 5px; float: left">
            <a href="/{{ $name }}/{{ $sub_class->ar_class_name }}" title="">{{ $sub_class->ar_class_name }}</a>
        </li>
        @endforeach
        <div class="clear"></div>
    </ul>
</div>
