<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;

class BlogController extends Controller
{
    //
    protected  function  index(){
        $posts = Post::all();
        return view('/blog/index',['posts'=>$posts]);
    }
    protected  function  adicionar(Request $request){
        $data = $request->all();
        Post::create([
            'title' => $data['title'],
            'content' => $data['content'],
        ]);
        return  redirect('/blog/index');
    }
    protected  function  remover($id){
        $post = Post::find($id);
        $post->delete();
        return  redirect('/blog/index');
    }
}
