<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Fungsi extends Controller
{
    public function fungsi($id) {
        return view('fungsi', ['id' => $id]);
      }
}
