<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

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
            
            // User::create($request->all());
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->roles = $request->roles;
            $user->save();
            return redirect('/manageuser')->with('info', 'Data Added!');
          }
          public function destroy(User $id) {
            User::destroy($id->id);
            return redirect('/manageuser')->with('info', 'Data Deleted!');
    
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
            $data->save();
            return redirect('/manageuser')->with('info', 'Data Edited!');
     }
}
