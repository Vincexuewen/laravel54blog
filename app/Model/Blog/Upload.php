<?php

namespace App\Model\Blog;

use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    //
    protected $table = 'upload';
    protected $fillable = [
        'filename','status',
    ];
}
