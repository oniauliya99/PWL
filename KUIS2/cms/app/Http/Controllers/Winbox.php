<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
Use App\Definisi;
Use App\Komen;
class Winbox extends Controller
{
     public function winbox($id) {
      $mikrotik = Definisi::find($id);
      $comments = Komen::all();        
      return view('winbox', ['definisis'=>$mikrotik],['comments'=>$comments]);
      }  
}