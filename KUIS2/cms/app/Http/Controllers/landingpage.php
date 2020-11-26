<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class landingpage extends Controller
{
    public function homeviews() {
        return view('homeviews', ['welcome' => 'Welcome :']);
      }
}
