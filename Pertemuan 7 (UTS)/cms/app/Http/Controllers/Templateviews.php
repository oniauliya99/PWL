<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;
use App\Definisi;

class Templateviews extends Controller
{
 //tanpa cache
  public function templ() {
        // $definisis = DB::table('definisis')->get();
        $mikrotik = Definisi::all();
        return view('templ', ['definisis' => $mikrotik]);
      }
      
    //dengan cache
    // public function __invoke(){
    //     Cache::rememberForever('definisis',function(){
    //         return Definisi::all();
    //     });
    //     $mikrotik = Cache::get('definisis');
    //     $mikrotik = json_decode(json_encode($mikrotik));
    //     return view('templ', ['definisis' => $mikrotik]);    
    // }
}
