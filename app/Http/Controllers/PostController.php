<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use DB;
use App\Post;
class PostController extends Controller
{
    function show($id){
      //       $post=\DB::table('post')->where('slug',$slug)->first();
//        dd($post);
        $post= Post::where('id',$id)->firstorfail();
//        if (!$post){
//            abort(404);
//        }
        return view('post',[
                'post'=>$post
        ]);
    }
// here is  tried to show data which i picked from url
    function view($post){
        $posts=['my-first-post'=>'this is my first post',
                'my-second-post'=>'this is my second post'
        ];
        return view('post',[
            'post'=>$posts[$post]
        ]);
    }
}
