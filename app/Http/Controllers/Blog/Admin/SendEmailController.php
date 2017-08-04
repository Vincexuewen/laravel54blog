<?php

namespace App\Http\Controllers\Blog\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mail;
use Redirect;

class SendEmailController extends Controller
{
    //推送纯文本
    public function index(Request $request){
        if($request->isMethod('post')){
            $useremail = $request->input('useremail');
            $subject = $request->input('subject');
            $textcontent = $request->input('usertext');
            /*
             * 函数闭包（匿名函数）传参使用use
             * */
            $res = Mail::raw($textcontent, function($message) use($useremail,$subject){
                $message ->to($useremail)->subject($subject);
            });
            return redirect()->route('sendOnlyText');
        }
        return view('Blog.Admin.Email.email');
    }
    //简单邮件+附件发送
    /*
     * $message->to 发送到某收件人
     * $message->attach 发送附件
     * subject 主题
     * */
    public function sendEmail(Request $request){
        if($request->isMethod('post')){
            $useremail = $request->input('useremail');
            $subject = $request->input('subject');
            $file = $request->file('enclosure');//dd($file);
            //Mail::send需要传递三个参数，第一个是邮件视图，第二个是传入视图的数据，第三个是一个闭包，该闭包中定义了收件人、抄送人（如果有的话）、邮件主题、附件等信息。
            Mail::send('Blog.Admin.Email.layout',['username'=>'vince'],function ($message) use($useremail,$subject,$file){
                $message->to($useremail)->subject($subject);
                //第一个参数是附件地址+文件名，第二个参数是一些额外参数，这里我们通过as指定附件在邮件中的显示名称。中文乱码解决['as'=>"=?UTF-8?B?".base64_encode('测试文档')."?=.doc"]，需要加上后缀名
                if($file){
                    $realpath = $file->getRealPath();//dd($realpath);
                    $originalName = $file->getClientOriginalName();
                    $message->attach($realpath,['as'=>"=?UTF-8?B?".base64_encode($originalName)."?="]);
                }
            });
            return redirect()->route('sendEmail');
        }
        return view('Blog.Admin.Email.sendEmail');
    }
}
