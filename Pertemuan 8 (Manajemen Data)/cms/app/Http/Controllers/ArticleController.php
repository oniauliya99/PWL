<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    // public function article($id) {
    //     return view('article', ['id' => $id]);
    // }

    public function __invoke ($id) {
        $articlesAll = Article::find($id);
        $articlesAll = json_decode(json_encode($articlesAll));
        
         return view('article', ['id'=>$id])->with(compact('articlesAll'));
     }
}
