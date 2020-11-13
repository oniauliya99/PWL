<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Fungsi extends Controller
{
  public function __construct()
{
 $this->middleware('auth');
}
 
  public function fungsi($id) {
        return view('fungsi', ['id' => $id]);
      }
}
