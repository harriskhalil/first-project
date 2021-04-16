<?php

namespace App\Http\Controllers;
use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    function show($slug){
        $article= Article::where('slug',$slug)->firstorfail();
        return view('articles.show',[
            'article'=>$article
        ]);
    }
}
