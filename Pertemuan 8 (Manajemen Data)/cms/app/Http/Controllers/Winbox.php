<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class Winbox extends Controller
{
  public function __construct()
{
 $this->middleware('auth');
}
 
  public function winbox($id) {
        return view('winbox', ['id' => $id]);
      }
}
