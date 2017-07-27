<?php
/**
 * Created by PhpStorm.
 * User: xuewen.zeng
 * Date: 2017/7/24
 * Time: 14:41
 */
?>
<!-- start: USER OPTIONS -->
<div class="nav-user-wrapper">
    <div class="media">
        <div class="media-left">
            <a class="profile-card-photo" href="#"><img alt="" src="{{ URL::asset('static/admin/assets/images/avatar-1.jpg') }}"></a>
        </div>
        <div class="media-body">
            <span class="media-heading text-white">Peter Clark</span>
            <div class="text-small text-white-transparent">
                UI Designer
            </div>
        </div>
        <div class="media-right media-middle">
            <div class="dropdown">
                <button href class="btn btn-transparent text-white dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-caret-down"></i>
                </button>
                <ul class="dropdown-menu animated fadeInRight pull-right">
                    <li>
                        <a href="#"> My Profile </a>
                    </li>
                    <li>
                        <a href="#"> My Calendar </a>
                    </li>
                    <li>
                        <a href="#"> Lock Screen </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#"> Log Out </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- end: USER OPTIONS -->
