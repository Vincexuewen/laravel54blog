<?php

namespace App\Http\Controllers\Blog\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    //
    public function dashboard(){
        return view('Blog.Admin.Home.dashboard');
    }
}
