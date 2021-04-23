<?php

namespace App\Http\Controllers;
use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    function index () {
        $article= Article::paginate(2);
        return view('articles.article',[
            'articles'=>$article
        ]);
    }
    function show($slug){
//        dd($id);
        $article= Article::where('slug',$slug)->firstorfail();
//        $article= Article::find($id);
        return view('articles.show',[
            'article'=>$article
        ]);
    }
}
