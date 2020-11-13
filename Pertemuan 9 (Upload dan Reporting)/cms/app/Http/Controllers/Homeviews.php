<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Definisi;
use PDF;


class Homeviews extends Controller
{
 
// public function __construct()
// {
//  //$this->middleware('auth');
//  $this->middleware(function($request, $next){
//  if(Gate::allows('manage-articles')) return $next($request);
//  abort(403, 'Anda tidak memiliki cukup hak akses');
//  });
// }
  
  public function homeviews() {
        return view('homeviews', ['welcome' => 'Welcome :']);
      }
      public function manage() {
        $mikrotik = Definisi::all();
        return view('manages.manage', ['definisis' => $mikrotik]);
      }
      public function create() {
        $mikrotik = Definisi::all();
        return view('manages.create', ['definisis' => $mikrotik]);
      }
      /*
      * Strore a newty created resource in storage.
      *
      
      * @param \Illuminate\Http\Request $request
      * @return \Illuminate\Http\Response
      */
      public function store(Request $request) {
        $request->validate([
          'id'=>'required',
          'judul'=>'required',
          'konten'=>'required',
          'featured_image=>required'
        ]);
        if($request->file('featured_image')){
          $image_name = $request->file('featured_image')->store('images','public');
          }
          Definisi::create([
            'id' => $request->id,
            'judul' => $request->judul,
            'konten'=> $request->konten,
            'link'=> $request->link,
            'featured_image' => $image_name,
            ]);
            return redirect('/manage')->with('info', 'Data Added!');
           
        // Definisi::create($request->all());
        // return redirect('/manage')->with('info', 'Data Added!');
      }
      /*
      * Strore a newty created resource in storage.
      *
      
      * @param \Illuminate\Http\Definisi $definisi
      * @return \Illuminate\Http\Response
      */
      public function destroy(Definisi $id) {
        Definisi::destroy($id->id);
        return redirect('/manage')->with('info', 'Data Deleted!');

      }
      public function edit($id){
        $data = Definisi::find($id);
        return view('layouts.edit',['definisi'=>$data]);
        }
        
      public function update($id, Request $request)
        {
        $data = Definisi::find($id);
        $data->id = $request->id;
        $data->konten = $request->konten;
        $data->judul = $request->judul;
        $data->link = $request->link;
        if($data->featured_image && file_exists(storage_path('app/public/' . $data->featured_image)))
        {
          \Storage::delete('public/'.$data->featured_image);
        }
          $image_name = $request->file('featured_image')->store('images', 'public');
          $data->featured_image = $image_name;
          $data->save();
          return redirect('/manage')->with('info', 'Data Edited!');
        } 

//         $data->save();
//         return redirect('/manage')->with('info', 'Data Edited!');
//  }

          public function cetak_pdf(){
            $article = Definisi::all();
            $pdf = PDF::loadview('articles_pdf',['article'=>$article]);
            return $pdf->stream();
 }
 

}
