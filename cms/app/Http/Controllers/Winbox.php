<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Winbox extends Controller
{
    public function winbox($id) {
        return view('winbox', ['id' => $id]);
      }
}
