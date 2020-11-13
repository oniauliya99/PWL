<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function __construct()
{
 $this->middleware('auth');
}

    public function about() {
        return view('about', ['nim' => '1931710119'], ['nama' => 'Auliya Oni Priyandika']);
    }
}
