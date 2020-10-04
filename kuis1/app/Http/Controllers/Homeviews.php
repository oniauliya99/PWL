<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homeviews extends Controller
{
    public function homeviews() {
        return view('homeviews', ['welcome' => 'Welcome :']);
      }
}
