<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Definisi;
Use App\Komen;
class IndexController extends Controller
{
     public function index($id) {
      $mikrotik = Definisi::find($id);
      $comments = Komen::all();        
      return view('index', ['definisis'=>$mikrotik],['comments'=>$comments]);
            
}
public function create(Request $request, $id)
    {   
        Komen::create([
            'author' => $request->author,
            'text' => $request->text,
            'featured_image' => $request->featured_image,
            'id_article' => $request->id_article
        ]);
        return redirect()->back();
    }
      
}
