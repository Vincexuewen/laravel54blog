<?php

namespace App\Http\Controllers\Blog\Reception;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class shareController extends Controller
{
    //
    public function index(){
        return view('Blog.Reception.share.share');
    }
}
