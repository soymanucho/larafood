<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    public function show()
    {
      return view('front.index');
    }
    public function menu()
    {
      return view('front.menu');
    }
}
