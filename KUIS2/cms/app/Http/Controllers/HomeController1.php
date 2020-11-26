<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Facades\Cache;

class HomeController1 extends Controller
{   
    // no 2 praktikum minggu 3
    // public function home() {
    //     return view('home', ['welcome' => 'Welcome :']);
    // }
    
    //no 4 get All praktikum minggu 4
    // public function __invoke () {
    //    $articlesAll = Article::all();
    //    $articlesAll = json_decode(json_encode($articlesAll));
       
    //     return view('home')->with(compact('articlesAll'));
    // }
    public function __invoke(){
        Cache::rememberForever('articlesAll',function(){
            return Article::all();
        });
        $articlesAll = Cache::get('articlesAll');
        $articlesAll = json_decode(json_encode($articlesAll));
        return view('home')->with(compact('articlesAll'));    
    }
}
