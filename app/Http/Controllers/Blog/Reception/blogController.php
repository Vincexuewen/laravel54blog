<?php

namespace App\Http\Controllers\Blog\Reception;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class blogController extends Controller
{
    public function __construct(){

    }

    //首页
    public function index(){
        return view('Blog.Reception.Home.home');
    }
}
