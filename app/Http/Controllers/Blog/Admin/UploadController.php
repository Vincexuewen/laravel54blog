<?php

namespace App\Http\Controllers\Blog\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Model\Blog\Upload;
use Redirect;

class UploadController extends Controller
{
    //
    public function index(Request $request){
        if($request->isMethod('post')){
            $file = $request->file('fileupload');
            //文件原名
            $originalname = $file->getClientOriginalName();
            //文件扩展名
            $extension = $file->getClientOriginalExtension();
            //文件大小
            $size = $file->getSize();
            //文件临时绝对路径
            $realpath = $file->getRealPath();
            /*
             * 移动文件到指定目录中
             * 第一个参数$path:文件移动的路径
             * 第二个参数$name:文件新名称
            */
            $path = public_path().'/Upload';
            /*
             * Carbon::now()返回的是对象类型
             * Carbon::now()->toDateString()年月日
             * Carbon::now()->toTimeString()时分秒
             * Carbon::now()->toDateTimeString() 年月日时分秒
             * Carbon::parse('today')->toDateTimeString(); 2017-08-08 00:00:00
             * Carbon::parse('yesterday')->toDateTimeString(); 2017-08-07 00:00:00
             * Carbon::parse('tomorrow')->toDateTimeString(); 2017-08-09 00:00:00
             * Carbon::parse('+3 days')->toDateTimeString(); 2017-08-11 15:38:51
             * Carbon::parse('-1 year')->toDateTimeString(); 2016-08-08 15:38:26
             * */
            $name = time().rand(1000,9999).'.'.$extension;
            $file->move($path,$name);
            if($file){
                $data['filename'] = $name;
                $data['status'] = 1;
                $res = Upload::create($data);
                if($res){
                    return redirect()->back();
                }else{
                    dd('插入数据库错误');
                }
            }else{
                dd('上传出现错误');
            }
        }
        $datas = Upload::where('status',1)->get();
        return view('Blog.Admin.Upload.Upload',compact('datas'));
    }
    public function storageUpload(Request $request){
        if($request->isMethod('post')){
             $file = $request->file('fileupload');
             $path = 'test';
             $name = Carbon::now()->format('YmdHis').'.'.$file->getClientOriginalExtension();
             /*
              * $path 是storage/app目录下自定义路径
              * $name 是文件名称
              * $file->storeAs($path,$name)返回的结果是文件的路径 test/20170809100717.png
              * */
             $res = $file->storeAs($path,$name);
             if($res){
                 $data['filename'] = $res;
                 $data['status'] = 2;
                 $add = Upload::create($data);
                 if($add){
                     return redirect()->back();
                 }else{
                     dd('操作失败');
                 }
             }else{
                 dd('操作失败');
             }
        }
        $datas = Upload::where('status',2)->get();
        return view('Blog.Admin.Upload.storageUpload',compact('datas'));
    }
    //浏览器中显示图片或pdf文件
    public function responseUpload($name){
        $pathToFile = public_path().'/Upload/'.$name;
        /*
         * 在用户浏览器显示文件，例如图片或PDF
         * 但是.txt文件会直接下载
         * */
        return response()->file($pathToFile);
    }
    public function storageUploadtest($name){
        $pathToFile = storage_path().'\app\test\\'.$name;
        return response()->file($pathToFile);
    }
}
