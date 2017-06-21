

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>vince博客后台</title>


    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="{{ URL::asset('static/Admin/assets/ico/favicon.ico') }}" type="image/x-icon" />

    <!-- Css files -->
    <link href="{{ URL::asset('static/Admin/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('static/Admin/assets/css/jquery.mmenu.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('static/Admin/assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('static/Admin/assets/css/climacons-font.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('static/Admin/assets/plugins/xcharts/css/xcharts.min.css') }}" rel=" stylesheet">
    <link href="{{ URL::asset('static/Admin/assets/plugins/fullcalendar/css/fullcalendar.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('static/Admin/assets/plugins/morris/css/morris.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('static/Admin/assets/plugins/jquery-ui/css/jquery-ui-1.10.4.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('static/Admin/assets/plugins/jvectormap/css/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('static/Admin/assets/css/style.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('static/Admin/assets/css/add-ons.min.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="{{ URL::asset('static/Admin/assets/js/html5shiv.js') }}"></script>
    <script src="{{ URL::asset('static/Admin/assets/js/respond.min.js') }}"></script>
    <![endif]-->
</head>
</head>

<body>
<!-- start: 头部 -->
<div class="navbar" role="navigation">

    <div class="container-fluid">

        <ul class="nav navbar-nav navbar-actions navbar-left">
            <li class="visible-md visible-lg"><a href="#" id="main-menu-toggle"><i class="fa fa-th-large"></i></a></li>
            <li class="visible-xs visible-sm"><a href="#" id="sidebar-menu"><i class="fa fa-navicon"></i></a></li>
        </ul>
        {{--搜索框--}}
        <form class="navbar-form navbar-left">
            <button type="submit" class="fa fa-search"></button>
            <input type="text" class="form-control" placeholder="Search..."></a>
        </form>
        <ul class="nav navbar-nav navbar-right">
            {{--邮件--}}
            <li class="dropdown visible-md visible-lg">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope-o"></i><span class="badge">5</span></a>
                <ul class="dropdown-menu">
                    <li class="dropdown-menu-header">
                        <strong>Messages</strong>
                        <div class="progress thin">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                                <span class="sr-only">30% Complete (success)</span>
                            </div>
                        </div>
                    </li>
                    <li class="avatar">
                        <a href="page-inbox.html">
                            <img class="avatar" src="assets/img/avatar1.jpg">
                            <div>New message</div>
                            <small>1 minute ago</small>
                            <span class="label label-info">NEW</span>
                        </a>
                    </li>
                    <li class="avatar">
                        <a href="page-inbox.html">
                            <img class="avatar" src="assets/img/avatar2.jpg">
                            <div>New message</div>
                            <small>3 minute ago</small>
                            <span class="label label-info">NEW</span>
                        </a>
                    </li>
                    <li class="avatar">
                        <a href="page-inbox.html">
                            <img class="avatar" src="assets/img/avatar3.jpg">
                            <div>New message</div>
                            <small>4 minute ago</small>
                            <span class="label label-info">NEW</span>
                        </a>
                    </li>
                    <li class="avatar">
                        <a href="page-inbox.html">
                            <img class="avatar" src="assets/img/avatar4.jpg">
                            <div>New message</div>
                            <small>30 minute ago</small>
                        </a>
                    </li>
                    <li class="avatar">
                        <a href="page-inbox.html">
                            <img class="avatar" src="assets/img/avatar5.jpg">
                            <div>New message</div>
                            <small>1 hours ago</small>
                        </a>
                    </li>
                    <li class="dropdown-menu-footer text-center">
                        <a href="page-inbox.html">View all messages</a>
                    </li>
                </ul>
            </li>
            {{--通知--}}
            <li class="dropdown visible-md visible-lg">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell-o"></i><span class="badge">3</span></a>
                <ul class="dropdown-menu">
                    <li class="dropdown-menu-header">
                        <strong>Notifications</strong>
                        <div class="progress thin">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                                <span class="sr-only">30% Complete (success)</span>
                            </div>
                        </div>
                    </li>
                    <li class="clearfix">
                        <i class="fa fa-comment"></i>
                        <a href="page-activity.html" class="notification-user"> Sharon Rose </a>
                        <span class="notification-action"> replied to your </span>
                        <a href="page-activity.html" class="notification-link"> comment</a>
                    </li>
                    <li class="clearfix">
                        <i class="fa fa-pencil"></i>
                        <a href="page-activity.html" class="notification-user"> Nadine </a>
                        <span class="notification-action"> just write a </span>
                        <a href="page-activity.html" class="notification-link"> post</a>
                    </li>
                    <li class="clearfix">
                        <i class="fa fa-trash-o"></i>
                        <a href="page-activity.html" class="notification-user"> Lorenzo </a>
                        <span class="notification-action"> just remove <a href="#" class="notification-link"> 12 files</a></span>
                    </li>
                    <li class="dropdown-menu-footer text-center">
                        <a href="page-activity.html">View all notification</a>
                    </li>
                </ul>
            </li>
            {{--设置--}}
            <li class="dropdown visible-md visible-lg">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-gears"></i></a>
                <ul class="dropdown-menu update-menu" role="menu">
                    <li><a href="#"><i class="fa fa-database"></i> Database </a>
                    </li>
                    <li><a href="#"><i class="fa fa-bar-chart-o"></i> Connection </a>
                    </li>
                    <li><a href="#"><i class="fa fa-bell"></i> Notification </a>
                    </li>
                    <li><a href="#"><i class="fa fa-envelope"></i> Message </a>
                    </li>
                    <li><a href="#"><i class="fa fa-flash"></i> Traffic </a>
                    </li>
                    <li><a href="#"><i class="fa fa-credit-card"></i> Invoices </a>
                    </li>
                    <li><a href="#"><i class="fa fa-dollar"></i> Finances </a>
                    </li>
                    <li><a href="#"><i class="fa fa-thumbs-o-up"></i> Orders </a>
                    </li>
                    <li><a href="#"><i class="fa fa-folder"></i> Directories </a>
                    </li>
                    <li><a href="#"><i class="fa fa-users"></i> Users </a>
                    </li>
                </ul>
            </li>
            {{--个人信息--}}
            <li class="dropdown visible-md visible-lg">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img class="user-avatar" src="{{ URL::asset('static/Admin/assets/img/avatar.jpg') }}" alt="user-mail">jhonsmith@mail.com</a>
                <ul class="dropdown-menu">
                    <li class="dropdown-menu-header">
                        <strong>Account</strong>
                    </li>
                    <li><a href="page-profile.html"><i class="fa fa-user"></i> Profile</a></li>
                    <li><a href="page-login.html"><i class="fa fa-wrench"></i> Settings</a></li>
                    <li><a href="page-invoice.html"><i class="fa fa-usd"></i> Payments <span class="label label-default">10</span></a></li>
                    <li><a href="gallery.html"><i class="fa fa-file"></i> File <span class="label label-primary">27</span></a></li>
                    <li class="divider"></li>
                    <li><a href="index.html"><i class="fa fa-sign-out"></i> Logout</a></li>
                </ul>
            </li>
            {{--退出按钮--}}
            <li><a href="index.html"><i class="fa fa-power-off"></i></a></li>
        </ul>

    </div>

</div>
<!-- end: 头部 -->

<div class="container-fluid content">

    <div class="row">

        <!-- start: 主菜单 -->
        <div class="sidebar ">

            <div class="sidebar-collapse">
                {{--logo--}}
                <div class="sidebar-header t-center">
                    <span>
                        <img class="text-logo" src="{{ URL::asset('static/Admin/assets/img/logo1.png') }}">
                        <i class="fa fa-space-shuttle fa-3x blue"></i>
                    </span>
                </div>
                {{--菜单栏--}}
                <div class="sidebar-menu">
                    <ul class="nav nav-sidebar">
                        <li>
                            <a href="/Admin/dashboard">
                                <i class="fa fa-laptop"></i>
                                <span class="text"> 仪表板</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-cogs"></i>
                                <span class="text"> 系统管理</span>
                                <span class="fa fa-angle-down pull-right"></span>
                            </a>
                            <ul class="nav sub">
                                <li>
                                    <a href="/Admin/system_manage/admin_manage/admin_list">
                                        <i class="fa fa-user"></i>
                                        <span class="text"> 管理员管理</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/Admin/system_manage/role_manage/role_list">
                                        <i class="fa fa-user-md"></i>
                                        <span class="text"> 角色管理</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/Admin/system_manage/permission_manage/permission_list">
                                        <i class="fa fa-cog"></i>
                                        <span class="text"> 权限管理</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            {{--菜单栏下方固定--}}
            <div class="sidebar-footer">
                <div class="sidebar-brand">
                    Proton
                </div>
                <ul class="sidebar-terms">
                    <li><a href="index.html#">Terms</a></li>
                    <li><a href="index.html#">Privacy</a></li>
                    <li><a href="index.html#">Help</a></li>
                    <li><a href="index.html#">About</a></li>
                </ul>
                <div class="copyright text-center">
                    <small>Proton <i class="fa fa-coffee"></i> from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></small>
                </div>
            </div>

        </div>
        <!-- end: 主菜单 -->

        <!-- start: 内容区 -->
        <div class="main">
            @yield('content')
        </div>
        <!-- end: 内容区 -->
        <br><br><br>

        {{--内容区底部固定信息--}}
        <div id="usage">
            <ul>
                <li>
                    <div class="title">Memory</div>
                    <div class="bar">
                        <div class="progress">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>
                        </div>
                    </div>
                    <div class="desc">4GB of 8GB</div>
                </li>
                <li>
                    <div class="title">HDD</div>
                    <div class="bar">
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%"></div>
                        </div>
                    </div>
                    <div class="desc">250GB of 1TB</div>
                </li>
                <li>
                    <div class="title">SSD</div>
                    <div class="bar">
                        <div class="progress">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>
                        </div>
                    </div>
                    <div class="desc">700GB of 1TB</div>
                </li>
                <li>
                    <div class="title">Bandwidth</div>
                    <div class="bar">
                        <div class="progress">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%"></div>
                        </div>
                    </div>
                    <div class="desc">90TB of 100TB</div>
                </li>
            </ul>
        </div>

    </div><!--/container-->

    {{--模态框--}}
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Warning Title</h4>
                </div>
                <div class="modal-body">
                    <p>Here settings can be configured...</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div class="clearfix"></div>


    <!-- start: JavaScript-->
    <!--[if !IE]>-->

    <script src="{{ URL::asset('static/Admin/assets/js/jquery-2.1.1.min.js') }}"></script>

    <!--<![endif]-->

    <!--[if IE]>

    <script src="{{ URL::asset('static/Admin/assets/js/jquery-1.11.1.min.js') }}"></script>

    <![endif]-->

    <!--[if !IE]>-->

    <script type="text/javascript">
        window.jQuery || document.write("<script src='assets/js/jquery-2.1.1.min.js'>"+"<"+"/script>");
    </script>

    <!--<![endif]-->

    <!--[if IE]>

    <script type="text/javascript">
        window.jQuery || document.write("<script src='assets/js/jquery-1.11.1.min.js'>"+"<"+"/script>");
    </script>

    <![endif]-->
    <script src="{{ URL::asset('static/Admin/assets/js/jquery-migrate-1.2.1.min.js') }}"></script>
    <script src="{{ URL::asset('static/Admin/assets/js/bootstrap.min.js') }}"></script>


    <!-- page scripts -->
    <script src="{{ URL::asset('static/Admin/assets/plugins/jquery-ui/js/jquery-ui-1.10.4.min.js') }}"></script>
    <script src="{{ URL::asset('static/Admin/assets/plugins/touchpunch/jquery.ui.touch-punch.min.js') }}"></script>
    <script src="{{ URL::asset('static/Admin/assets/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ URL::asset('static/Admin/assets/plugins/fullcalendar/js/fullcalendar.min.js') }}"></script>
    <!--[if lte IE 8]>
    <script language="javascript" type="text/javascript" src="{{ URL::asset('static/Admin/assets/plugins/excanvas/excanvas.min.js') }}"></script>
    <![endif]-->
    <script src="{{ URL::asset('static/Admin/assets/plugins/flot/jquery.flot.min.js') }}"></script>
    <script src="{{ URL::asset('static/Admin/assets/plugins/flot/jquery.flot.pie.min.js') }}"></script>
    <script src="{{ URL::asset('static/Admin/assets/plugins/flot/jquery.flot.stack.min.js') }}"></script>
    <script src="{{ URL::asset('static/Admin/assets/plugins/flot/jquery.flot.resize.min.js') }}"></script>
    <script src="{{ URL::asset('static/Admin/assets/plugins/flot/jquery.flot.time.min.js') }}"></script>
    <script src="{{ URL::asset('static/Admin/assets/plugins/flot/jquery.flot.spline.min.js') }}"></script>
    <script src="{{ URL::asset('static/Admin/assets/plugins/xcharts/js/xcharts.min.js') }}"></script>
    <script src="{{ URL::asset('static/Admin/assets/plugins/autosize/jquery.autosize.min.js') }}"></script>
    <script src="{{ URL::asset('static/Admin/assets/plugins/placeholder/jquery.placeholder.min.js') }}"></script>
    <script src="{{ URL::asset('static/Admin/assets/plugins/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('static/Admin/assets/plugins/datatables/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('static/Admin/assets/plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ URL::asset('static/Admin/assets/plugins/morris/js/morris.min.js') }}"></script>
    <script src="{{ URL::asset('static/Admin/assets/plugins/jvectormap/js/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ URL::asset('static/Admin/assets/plugins/jvectormap/js/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ URL::asset('static/Admin/assets/plugins/jvectormap/js/gdp-data.js') }}"></script>
    <script src="{{ URL::asset('static/Admin/assets/plugins/gauge/gauge.min.js') }}"></script>


    <!-- theme scripts -->
    <script src="{{ URL::asset('static/Admin/assets/js/SmoothScroll.js') }}"></script>
    <script src="{{ URL::asset('static/Admin/assets/js/jquery.mmenu.min.js') }}"></script>
    <script src="{{ URL::asset('static/Admin/assets/js/core.min.js') }}"></script>
    <script src="{{ URL::asset('static/Admin/assets/plugins/d3/d3.min.js') }}"></script>

    <!-- inline scripts related to this page -->
    <script src="{{ URL::asset('static/Admin/assets/js/pages/index.js') }}"></script>

    <!-- end: JavaScript-->

</body>
</html>