<!DOCTYPE html>
<!-- Template Name: Packet - Responsive Admin Template build with Twitter Bootstrap 3.x | Author: ClipTheme -->
<!--[if IE 8]><html class="ie8" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- start: HEAD -->
<head>
    <title>Packet - Responsive Admin Template</title>
    <!-- start: META -->
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- end: META -->
    <!-- start: MAIN CSS -->
    <link rel="stylesheet" href="{{ URL::asset('blog/admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('blog/admin/bower_components/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('blog/admin/bower_components/themify-icons/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('blog/admin/bower_components/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('blog/admin/bower_components/animate.css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('blog/admin/bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('blog/admin/bower_components/switchery/dist/switchery.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('blog/admin/bower_components/seiyria-bootstrap-slider/dist/css/bootstrap-slider.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('blog/admin/bower_components/ladda/dist/ladda-themeless.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('blog/admin/bower_components/slick.js/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('blog/admin/bower_components/slick.js/slick/slick-theme.css') }}">
    <!-- end: MAIN CSS -->
    <!-- start: Packet CSS -->
    <link rel="stylesheet" href="{{ URL::asset('blog/admin/assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('blog/admin/assets/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('blog/admin/assets/css/themes/lyt2-theme-1.css') }}">
    <!-- end: Packet CSS -->
    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- end: HEAD -->
<body>
<div id="app" class="lyt-2">
    <!-- sidebar -->
    <div class="sidebar app-aside" id="sidebar">
        <div class="sidebar-container perfect-scrollbar">
            <div>
                @include('Blog.Admin.public.public_useroption')
                @include('Blog.Admin.public.public_meau')
            </div>
        </div>
    </div>
    <!-- / sidebar -->
    <div class="app-content">
        <!-- start: TOP NAVBAR -->
        <header class="navbar navbar-default navbar-blog-top">
            @include('Blog.Admin.public.public_topnavbar')
        </header>
        <!-- end: TOP NAVBAR -->
        <div class="main-content" >
            <div class="wrap-content container" id="container">
                @yield('content')
            </div>
        </div>
    </div>
    @include('Blog.Admin.public.public_footer')
    @include('Blog.Admin.public.public_setting'))
</div>
<!-- start: MAIN JAVASCRIPTS -->
<script src="{{ URL::asset('blog/admin/bower_components/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ URL::asset('blog/admin/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('blog/admin/bower_components/components-modernizr/modernizr.js') }}"></script>
<script src="{{ URL::asset('blog/admin/bower_components/js-cookie/src/js.cookie.js') }}"></script>
<script src="{{ URL::asset('blog/admin/bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js') }}"></script>
<script src="{{ URL::asset('blog/admin/bower_components/jquery-fullscreen/jquery.fullscreen-min.js') }}"></script>
<script src="{{ URL::asset('blog/admin/bower_components/switchery/dist/switchery.min.js') }}"></script>
<script src="{{ URL::asset('blog/admin/bower_components/jquery.knobe/dist/jquery.knob.min.js') }}"></script>
<script src="{{ URL::asset('blog/admin/bower_components/seiyria-bootstrap-slider/dist/bootstrap-slider.min.js') }}"></script>
<script src="{{ URL::asset('blog/admin/bower_components/slick.js/slick/slick.min.js') }}"></script>
<script src="{{ URL::asset('blog/admin/bower_components/jquery-numerator/jquery-numerator.js') }}"></script>
<script src="{{ URL::asset('blog/admin/bower_components/ladda/dist/spin.min.js') }}"></script>
<script src="{{ URL::asset('blog/admin/bower_components/ladda/dist/ladda.min.js') }}"></script>
<script src="{{ URL::asset('blog/admin/bower_components/ladda/dist/ladda.jquery.min.js') }}"></script>
<!-- end: MAIN JAVASCRIPTS -->
<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script src="{{ URL::asset('blog/admin/bower_components/Chart-js/Chart.min.js') }}"></script>
<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<!-- start: Packet JAVASCRIPTS -->
<script src="{{ URL::asset('blog/admin/assets/js/letter-icons.js') }}"></script>
<script src="{{ URL::asset('blog/admin/assets/js/main.js') }}"></script>
<!-- end: Packet JAVASCRIPTS -->
<!-- start: JavaScript Event Handlers for this page -->
<script src="{{ URL::asset('blog/admin/assets/js/index.js') }}"></script>
<script>
    jQuery(document).ready(function() {
        Main.init();
        Index.init();
    });
</script>
<!-- end: JavaScript Event Handlers for this page -->
</body>
</html>
