<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Komen;
use App\Definisi;

class Komentar extends Controller
{
    public function post($id)
        {
             $mikrotik = Definisi::find($id);
             $comments = Komen::all();        
             return view('layouts.idx', ['definisis'=>$mikrotik],['comments'=>$comments]);
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

    public function delete($id)
    {
        $comments = Komen::find($id);
        $comments->delete();
        // return redirect()->action('PostController@post',['id' => $id]);
        return redirect()->back();
    }

}
