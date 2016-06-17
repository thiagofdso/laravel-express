<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;

class Blog extends Controller
{
    //
    protected  function  index(){
        $posts = Post::all();
        return view('/blog/index',['posts'=>$posts]);
    }
}
