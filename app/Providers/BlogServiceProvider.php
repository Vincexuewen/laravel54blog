<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Model\Blog\Articles;
use App\Model\Blog\Articles_class;

class BlogServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //热门文章
       $articles_hot = Articles::orderBy('ar_hits','desc')->limit(5)->get();
       view()->share('articles_hot',$articles_hot);
       //获取自定义菜单
        $meaus = Articles_class::where('type',0)->get();
        view()->share('meaus',$meaus);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
