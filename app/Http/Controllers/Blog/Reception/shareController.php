<?php

namespace App\Http\Controllers\Blog\Reception;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Blog\Diary;

class shareController extends Controller
{
    //
    public function index(){
        $diarys = Diary::orderBy('created_at','desc')->get();
        return view('Blog.Reception.share.share',compact('diarys'));
    }
}
