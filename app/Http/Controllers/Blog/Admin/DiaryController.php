<?php

namespace App\Http\Controllers\Blog\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Blog\Diary;

class DiaryController extends Controller
{
    //
    public function index(){
        $diarys = Diary::all();
        return view('Blog.Admin.Diary.diary',compact('diarys'));
    }
}
