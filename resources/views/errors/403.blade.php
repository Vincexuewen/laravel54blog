<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/18 0018
 * Time: 23:08
 */
?>
<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/18 0018
 * Time: 20:03
 */
?>
        <!--
$previousurl ：页面跳转的地址
-->
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>跳转提示</title>
    <style type="text/css">
        *{ padding: 0; margin: 0; }
        body{font-family: '微软雅黑'; color: #fff; font-size: 16px; }
        .system-message{ padding: 24px 48px; text-align: center;}
        .system-message h1{ font-size: 80px; font-weight: normal; line-height: 120px;color:black;}
        .system-message .jump{ padding-top: 10px;margin-bottom:20px;color:black;}
    </style>
</head>
<body>
<div class="system-message">
    <h1>抱歉,出错啦!</h1>
    <p class="jump">
        <b id="wait">3</b> 秒后页面将自动跳转，点击<a id="href" href="">返回</a>直接跳转
    </p>
</div>
{{--<script language="javascript" type="text/javascript">--}}
    {{--var i = 3;--}}
    {{--var intervalid;--}}
    {{--intervalid = setInterval("fun()", 1000);--}}
    {{--function fun() {--}}
        {{--if (i == 0) {--}}
            {{--window.location.href = "";--}}
            {{--clearInterval(intervalid);--}}
        {{--}--}}
        {{--i--;--}}
        {{--document.getElementById("wait").innerHTML = i;--}}
    {{--}--}}
{{--</script>--}}
</body>
</html>

