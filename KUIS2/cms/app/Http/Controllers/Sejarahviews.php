<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Definisi;
Use App\Komen;
class Sejarahviews extends Controller
{
      public function sejarahviews($id) {
      $mikrotik = Definisi::find($id);
      $comments = Komen::all();        
      return view('sejarahviews', ['definisis'=>$mikrotik],['comments'=>$comments]);
     }
}
