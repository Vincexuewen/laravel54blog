<?php

namespace App\Http\Controllers\Blog\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Blog\Banner;
use Validator;
use Intervention\Image\Facades\Image;
use Redirect;

class BannerController extends Controller
{
    protected $path = 'blog/banner';
    //轮播图列表
    public function index(){
        $banners = Banner::all();
        return view('Blog.Admin.Banner.banner',compact('banners'));
    }
    //轮播图添加
    public function create(Request $request){
        $validator = Validator::make($request->all(), [
            'img_url' => 'required|image',
        ],[
            'img_url.required' => '图片不能为空',
            'img_url.image' => '请上传jpeg、png、bmp、gif格式的图片',
        ])->validate();
        $file = $request->file('img_url');
        $extension = $file->clientExtension();
        $newfilename = md5(time().rand(0,1000)).'.'.$extension;
        $upload = $file->move($this->path,$newfilename);
        if($upload){
            $data['banner_url'] = $this->path.'/'.$newfilename;
            $data['order'] = $request->input('order');
            //图片处理，添加扩展包intervention\Image
            Image::make($data['banner_url'])->resize(820,200)->save($data['banner_url']);
            $result = Banner::create($data);
            if($result){
                return redirect('/blog/admin/Content-Manage/Banner-Manage')->withsuccess('提交成功！');
            }else{
                return Redirect::back()->withInput()->withErrors('提交失败，请重新操作！');
            }
        }else{
            return Redirect::back()->withInput()->withErrors('提交失败，请重新操作！');
        }
    }
    //轮播图编辑
    public function edit(Request $request,$id){
        $banner = Banner::find($id);
        if($request->isMethod('post')){
            $validator = Validator::make($request->all(), [
                'status' => 'required',
            ],[
                'status.required' => '状态不能为空',
            ])->validate();
            if(!is_int($request->input('order')) && $request->input('order') == ''){
                return Redirect::back()->withInput()->withErrors('排序输入值必须是整数');
            }
            $banner->order = $request->input('order');
            $banner->status = $request->input('status');
            if($request->hasFile('img_url')){
                $validator = Validator::make($request->all(), [
                    'img_url' => 'required|image',
                ],[
                    'img_url.required' => '图片不能为空',
                    'img_url.image' => '请上传jpeg、png、bmp、gif格式的图片',
                ])->validate();
                $file = $request->file('img_url');
                $extension = $file->clientExtension();
                $newfilename = md5(time().rand(0,1000)).'.'.$extension;
                $upload = $file->move($this->path,$newfilename);
                if($upload){
                    $banner->banner_url = $this->path.'/'.$newfilename;
                    //图片处理，添加扩展包intervention\Image
                    Image::make($this->path.'/'.$newfilename)->resize(820,200)->save($this->path.'/'.$newfilename);
                    $result = $banner->save();
                    if($result){
                        return redirect('/blog/admin/Content-Manage/Banner-Manage')->withsuccess('提交成功！');
                    }else{
                        return Redirect::back()->withInput()->withErrors('提交失败，请重新操作！');
                    }
                }else{
                    return Redirect::back()->withInput()->withErrors('提交失败，请重新操作！');
                }
            }else{
                $res = $banner->save();
                if($res){
                    return redirect('/blog/admin/Content-Manage/Banner-Manage')->withsuccess('编辑成功！');
                }else{
                    return Redirect::back()->withInput()->withErrors('编辑失败,请重新操作!');
                }
            }
        }
        return view('Blog.Admin.Banner.banner_edit',compact('banner'));
    }
    //轮播图删除
    public function delete(Request $request){
        $id = $request->input('id');
        $filePath = Banner::find($id)->banner_url;
        $res = Banner::destroy($id);
        if($res){
            //删除封面图片
            unlink($filePath);
            return response()->json([
                'code' => '200',
                'msg' => 'success',
            ]);
        }else{
            return response()->json([
                'code' => '200',
                'msg' => 'error',
            ]);
        }
    }
}
