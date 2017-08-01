<?php

namespace App\Http\Controllers\Blog\Reception;

use App\Model\Blog\Articles_class;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Blog\Articles;
use DB;

class blogController extends Controller
{
    //首页
        public function index(){
        $articles = DB::table('blog_articles as a')->join('blog_articles_class as b','a.ar_class_id','=','b.ar_class_id')
                                                   ->select('a.*','b.ar_class_name')
                                                   ->orderBy('a.created_at','desc')
                                                   ->paginate(8);
        return view('Blog.Reception.Home.home',compact('articles'));
    }
    //文章类型
    public function articles_type($name){
        $subs_class = $this->get_category('Web');
        $a='';
        foreach ($subs_class as $sub_class){
            $a .= $sub_class->ar_class_id.',';
        }
        $a = rtrim($a, ",");
        $arr = explode(',',$a);
        $articles = DB::table('blog_articles as a')->join('blog_articles_class as b','a.ar_class_id','=','b.ar_class_id')
                                                   ->select('a.*','b.ar_class_name')
                                                   ->orderBy('a.created_at','desc')
                                                   ->whereIn('a.ar_class_id',$arr)
                                                   ->paginate(8);
        return view('Blog.Reception.Home.articles',compact('subs_class','articles'));
    }
    //文章内容显示
    public function article($id){
        //上一篇文章
        $prev_article = Articles::where('ar_id','<',$id)->first();
        //下一篇文章
        $next_article = Articles::where('ar_id','>',$id)->first();
        $article = DB::table('blog_articles as a')->join('blog_articles_class as b','a.ar_class_id','=','b.ar_class_id')
                                                  ->select('a.*','b.ar_class_name')
                                                  ->where('a.ar_id',$id)
                                                  ->first();//dd($article);
        return view('Blog.Reception.Home.article',compact('article','prev_article','next_article'));
    }

    //根据顶级名称获取子分类名称
    public function get_category($ar_class_name){
        //获取当前parent_id的主键
        $id = Articles_class::where('ar_class_name',$ar_class_name)->value('ar_class_id');
        $ar_class_name = Articles_class::where('parent_id',$id)->get();
        return $ar_class_name;
    }
}
