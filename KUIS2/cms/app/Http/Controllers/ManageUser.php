<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use PDF;

class ManageUser extends Controller
{
    
          public function manage() {
            $mikrotik = User::all();
            return view('manages.manageuser', ['users' => $mikrotik]);
          }
          public function create() {
            $mikrotik = User::all();
            return view('manages.createuser', ['users' => $mikrotik]);
          }
          /*
          * Strore a newty created resource in storage.
          *
          
          * @param \Illuminate\Http\Request $request
          * @return \Illuminate\Http\Response
          */
          public function __construct()
            {
            //$this->middleware('auth');
            $this->middleware(function($request, $next){
            if(Gate::allows('manage-articles')) return $next($request);
            abort(403, 'Anda tidak memiliki cukup hak akses');
            });
            }

          
          public function store(Request $request) {
            $request->validate([
              'name'=>'required',
              'email'=>'required',
              'password'=>'required',
              'featured_image=>required'
            ]);
            // User::create($request->all());
            if($request->file('featured_image')){
              $image_name = $request->file('featured_image')->store('images','public');
              }
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->roles = $request->roles;
            $user->featured_image = $image_name;
            $user->save();
            return redirect('/manageuser')->with('info', 'Data Added!');
          }
          public function destroy(User $id) {
            User::destroy($id->id);
            return redirect('/manageuser')->with('delete', 'Data Deleted!');
    
          }
          public function edit($id){
            $data = User::find($id);
            return view('layouts.edituser',['users'=>$data]);
            }
            
          public function update($id, Request $request)
            {
            $data = User::find($id);
            $data->id = $request->id;
            $data->name = $request->name;
            $data->email = $request->email;
            $data->roles = $request->roles;
            if($data->featured_image && file_exists(storage_path('app/public/' . $data->featured_image)))
        {
          \Storage::delete('public/'.$data->featured_image);
        }
          $image_name = $request->file('featured_image')->store('images', 'public');
          $data->featured_image = $image_name;
          $data->save();
            return redirect('/manageuser')->with('info', 'Data Edited!');
     }
          public function cetak_pdf(){
          $article = User::all();
          $pdf = PDF::loadview('user_pdf',['user'=>$article]);
          return $pdf->stream();
          //return view('user_pdf',['user'=>$article]);
        }
}
