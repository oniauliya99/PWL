<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Definisi;

class Templateviews extends Controller
{

  public function __construct()
  {
  //$this->middleware('auth');
  $this->middleware(function($request, $next){
  if(Gate::allows('user-display')) return $next($request);
  abort(403, 'Anda tidak memiliki cukup hak akses');
  });
}
  public function templ() {
        // $definisis = DB::table('definisis')->get();
        $mikrotik = Definisi::latest()->paginate(3);
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
