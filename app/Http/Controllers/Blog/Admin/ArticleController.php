<?php

namespace App\Http\Controllers\Blog\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Blog\Articles;
use App\Model\Blog\Articles_class;
use DB;
use Validator;
use Redirect;

class ArticleController extends Controller
{
    //上传文章封面图片路径
    protected $path = 'blog/Articles';
    //文章列表
    public function index(){
        $articles = DB::table('blog_articles')->join('blog_articles_class','blog_articles.ar_class_id','=','blog_articles_class.ar_class_id')
                                              ->get();
        return view('Blog.Admin.Article.article',compact('articles'));
    }
    //文章创建
    public function create(Request $request){
        if($request->isMethod('post')){
            //表单验证
            //$validator = Validator::make($request->all(),$this->rules(),$this->message())->validate();
            $file = $request->file('img_url');//dd($file);
            if($file->isValid()){
                //获取文件大小
                $Size = $file->getSize();//dd($Size);
                //文件大小不超过2m
                if($Size > 2*1024*1024){
                    return Redirect::back()->withInput()->withErrors('上传文件不能超过2M');
                }
                // 文件原名
                $originalName = $file->getClientOriginalName();//dd($originalName);
                // 扩展名
                $extension = $file->getClientOriginalExtension();//dd($extension);
                //临时文件的绝对路径
                $realPath = $file->getRealPath();//dd($realPath);
                $newFileName = md5(time().rand(0,1000)).'.'.$extension;//dd($newFileName);
                //把缓存文件移动到指定文件夹
                $upload = $file->move($this->path,$newFileName);
                if($upload){
                    $data['ar_title'] = $request->input('title');
                    $data['ar_img_url'] = 'blog'.'/'.'Articles'.'/'.$newFileName;
                    $data['ar_class_id'] = $request->input('type');
                    $data['ar_status'] = $request->input('status');
                    $data['ar_content'] = $request->input('content');
                    $result = Articles::create($data);
                    if($result){
                        return redirect('/admin/Content-Manage/Article-Manage')->withsuccess('文章发布成功！');
                    }else{
                        return Redirect::back()->withInput()->withErrors('文章发布失败，请重新操作！');
                    }
                }else{
                    return Redirect::back()->withInput()->withErrors('文章发布失败，请重新操作！');
                }
            }
        }
        $articles_class = Articles_class::all();
        return view('Blog.Admin.Article.article_create',compact('articles_class'));
    }
    //文章编辑
    public function edit(Request $request,$id){
        dd($id);
    }
    //文章删除
    public function delete(Request $request){
        $ar_id = $request->input('id');dd($ar_id);
    }
    //验证自定义错误信息
    public function message(){
        $message = [
            'img_url.required' => '封面图片不能为空',
            'img_url.image' => '请上传jpeg、png、bmp、gif格式的图片',
            'type.required' => '文章类型不能为空',
            'status.required' => '文章状态不能为空',
        ];
        return $message;
    }
    //验证自定义规则
    public function rules(){
        $rules = [
            'title' => 'required',
            'img_url' => 'required|image',
            'type' => 'required',
            'status' => 'required',
            'content' => 'required',
        ];
        return $rules;
    }
}
