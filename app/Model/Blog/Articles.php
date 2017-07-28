<?php

namespace App\Model\Blog;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    //
    protected $table = 'blog_articles';
    protected $primaryKey = 'ar_id';
    protected $fillable = [
        'ar_title','ar_class_id','ar_img_url','ar_content','ar_status'
    ];
    public function articles_class(){
        return $this->hasOne('App\Model\Blog\Articles_class','ar_class_id','ar_class_id');
    }
}
