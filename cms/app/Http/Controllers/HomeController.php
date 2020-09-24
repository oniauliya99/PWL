<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class HomeController extends Controller
{
    // public function home() {
    //     return view('home', ['welcome' => 'Welcome :']);
    // }
    public function __invoke () {
       $articlesAll = Article::all();
       $articlesAll = json_decode(json_encode($articlesAll));
       
        return view('home')->with(compact('articlesAll'));
    }
}
