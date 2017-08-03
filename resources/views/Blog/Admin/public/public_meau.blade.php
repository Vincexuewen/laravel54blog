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
                <li>
                    <a href="page_layouts_fixed_header_sidebar.html"> <span class="title"> Fixed Header &amp; Sidebar </span> </a>
                </li>
                <li>
                    <a href="page_layouts_fixed_footer.html"> <span class="title"> Fixed Footer </span> </a>
                </li>
                <li>
                    <a href="page_layouts_boxed_page.html"> <span class="title"> Boxed Page </span> </a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- end: MAIN NAVIGATION MENU -->
</nav>
