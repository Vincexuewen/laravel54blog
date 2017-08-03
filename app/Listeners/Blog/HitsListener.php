<?php

namespace App\Listeners\Blog;

use App\Events\Blog\ArticleHits;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Model\Blog\ArticleIp;
use Request;

class HitsListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public $articleIp;
    public function __construct(ArticleIp $articleIps)
    {
        //
        $this->articleIp = $articleIps;
    }

    /**
     * Handle the event.
     *
     * @param  ArticleHits  $event
     * @return void
     */
    public function handle(ArticleHits $event)
    {
        //
        $articles = $event->articles;
        /*
         * 查找当前客户端IP是否已阅读
         * 如果已阅读，点击量不添加，
         * 如果为阅读，添加当前ip到数据库且点击量添加1
         * */
        $res = $this->articleIp->where('ar_id',$articles->ar_id)->first();//dd($res);
        if(!$res){
            $this->articleIp->ar_id = $articles->ar_id;
            $this->articleIp->ip = Request::ip();
            $this->articleIp->save();
            $articles->ar_hits += 1;
            $articles->save();
        }

    }
}
