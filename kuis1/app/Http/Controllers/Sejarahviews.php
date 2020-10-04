<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Sejarahviews extends Controller
{
  public function sejarahviews($id) {
    return view('sejarahviews', ['id' => $id]);
  }
}
