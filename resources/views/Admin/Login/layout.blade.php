<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
    <meta charset="UTF-8" />
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
    <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
    <meta name="author" content="Codrops" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('static/Admin/Login/demo.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('static/Admin/Login/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('static/Admin/Login/animate-custom.css') }}" />
</head>
<body>
<div class="container">
    <section>
        <div id="container_demo" >
            <div id="wrapper">
                @yield('content')
            </div>
        </div>
    </section>
</div>
</body>
</html>