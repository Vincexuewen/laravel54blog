<?php
/**
 * Created by PhpStorm.
 * User: xuewen.zeng
 * Date: 2017/6/21
 * Time: 17:48
 */
?>
@if (Session::has('success'))
    <script>
        $(document).ready(function () {
            toastr.options = {
                //是否在通知弹窗上面显示关闭按钮，true：显示；false：不显示
                "closeButton": true,
                //是否开起debug
                //'debug': true,
                //是否显示进度条，当为false时候不显示；当为true时候，显示进度条，当进度条缩短到0时候，消息通知弹窗消失
                'progressBar': true,
                //位置信息，消息弹窗显示的位置，可以显示的位置对应的值
                /*
                *
                *toast-top-right
                 toast-botton-right
                 toash-bottom-left
                 toast-top-left
                 toast-top-full-width 这个是在网页顶端，宽度铺满整个屏幕
                 toast-bottom-full-width
                 toast-top-center顶端中间
                 toast-bottom-center
                *
                */
                "positionClass": "toast-top-right",
                "onclick": null,
                //显示动作（从无到有这个动作）持续的时间
                "showDuration": "1000",
                //隐藏动作持续的时间
                "hideDuration": "1000",
                //间隔的时间
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                //显示的方式，和jquery相同，可以是show()
                "showMethod": "fadeIn",
                //隐藏的方式，和jquery相同，可以是hide()
                "hideMethod": "fadeOut"
            }
            /*
            * 显示的通知的样式类型，有4种选择
            * success 成功，绿色
             info 信息，蓝色
             warning，警告，橙色
             error，错误，深红色
            * */
            toastr.success('{{ Session::get('success') }}');
        })
    </script>
@endif
