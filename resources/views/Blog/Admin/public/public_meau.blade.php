<?php
/**
 * Created by PhpStorm.
 * User: xuewen.zeng
 * Date: 2017/7/24
 * Time: 14:43
 */
?>
<nav>
    <!-- start: MAIN NAVIGATION MENU -->
    <ul class="main-navigation-menu">
        <li class="{{ Request::is('blog/admin/dashboard') ? 'active open' : '' }}">
            <a href="/blog/admin/dashboard">
                <div class="item-content">
                    <div class="item-media">
                        <i class="fa fa-home"></i>
                    </div>
                    <div class="item-inner">
                        <span class="title"> 仪表板 </span>
                    </div>
                </div> </a>
        </li>
        <li class="{{ Request::is('blog/admin/Content-Manage*') ? 'active open' : '' }}">
            <a href="javascript:void(0)">
                <div class="item-content">
                    <div class="item-media">
                        <i class="fa fa-clone"></i>
                    </div>
                    <div class="item-inner">
                        <span class="title"> 内容管理 </span><i class="icon-arrow"></i>
                    </div>
                </div> </a>
            <ul class="sub-menu">
                <li class="{{ Request::is('blog/admin/Content-Manage/Article-Manage*') ? 'active open' : '' }}">
                    <a href="/blog/admin/Content-Manage/Article-Manage"> <span class="title"> 文章管理 </span> </a>
                </li>
                <li class="{{ Request::is('blog/admin/Content-Manage/Banner-Manage*') ? 'active open' : '' }}">
                    <a href="/blog/admin/Content-Manage/Banner-Manage"> <span class="title"> 轮播图管理 </span> </a>
                </li>
                <li class="{{ Request::is('blog/admin/Content-Manage/Diary-Manage*') ? 'active open' : '' }}">
                    <a href="/blog/admin/Content-Manage/Diary-Manage"> <span class="title"> 日记管理 </span> </a>
                </li>
            </ul>
        </li>
        <li class="{{ Request::is('blog/admin/Function-Manage*') ? 'active open' : '' }}">
            <a href="javascript:void(0)">
                <div class="item-content">
                    <div class="item-media">
                        <i class="fa fa-heart"></i>
                    </div>
                    <div class="item-inner">
                        <span class="title"> 功能模块 </span><i class="icon-arrow"></i>
                    </div>
                </div> </a>
            <ul class="sub-menu">
                <li class="{{ Request::is('blog/admin/Function-Manage/Email-Send*') ? 'active open' : '' }}">
                    <a href="/blog/admin/Function-Manage/Email-Send/sendOnlyText"> <span class="title"> 邮件推送 </span> </a>
                </li>
                <li class="{{ Request::is('blog/admin/Function-Manage/Upload-File*') ? 'active open' : '' }}">
                    <a href="/blog/admin/Function-Manage/Upload-File"> <span class="title"> 文件上传 </span> </a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- end: MAIN NAVIGATION MENU -->
</nav>
