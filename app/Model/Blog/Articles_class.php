<?php

namespace App\Model\Blog;

use Illuminate\Database\Eloquent\Model;

class Articles_class extends Model
{
    //
    protected $table = 'blog_articles_class';
    protected $primaryKey = 'ar_class_id';
    protected $fillable = [
        'ar_class_id','ar_class_name'
    ];
    public function Articles(){
        return $this->belongsTo('App\Model\Blog\Articles','ar_class_id','ar_class_id');
    }
}
