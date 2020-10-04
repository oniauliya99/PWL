<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about() {
        return view('about', ['nim' => '1931710119'], ['nama' => 'Auliya Oni Priyandika']);
    }
}
