<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Definisi;
Use App\Komen;
class Fungsi extends Controller
{
     public function fungsi($id) {
      $mikrotik = Definisi::find($id);
      $comments = Komen::all();        
      return view('fungsi', ['definisis'=>$mikrotik],['comments'=>$comments]);
      }
      public function dns($id) {
            $mikrotik = Definisi::find($id);
            $comments = Komen::all();        
            return view('dns', ['definisis'=>$mikrotik],['comments'=>$comments]);
      }
      public function bandwidth($id) {
            $mikrotik = Definisi::find($id);
            $comments = Komen::all();        
            return view('bandwidth', ['definisis'=>$mikrotik],['comments'=>$comments]);
      }
       public function routing($id) {
            $mikrotik = Definisi::find($id);
            $comments = Komen::all();        
            return view('routing', ['definisis'=>$mikrotik],['comments'=>$comments]);
      }
      public function nat($id) {
            $mikrotik = Definisi::find($id);
            $comments = Komen::all();        
            return view('nat', ['definisis'=>$mikrotik],['comments'=>$comments]);
                              }
}

