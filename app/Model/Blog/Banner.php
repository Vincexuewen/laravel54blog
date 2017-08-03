<?php

namespace App\Model\Blog;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    //
    protected $table = 'blog_banner';
    protected $fillable=[
        'banner_url','order'
    ];
}
