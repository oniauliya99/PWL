<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
     public function index($id) {
        return view('index', ['id' => $id]);
      }
      
}
