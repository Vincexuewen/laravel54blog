<?php
/**
 * Created by PhpStorm.
 * User: xuewen.zeng
 * Date: 2017/6/21
 * Time: 17:49
 */
?>
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>出错了!</strong>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
