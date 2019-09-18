<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SellableType;
use App\Store;

class indexController extends Controller
{
  
  public function show()
  {
    $sellableTypes = SellableType::all();
    $sellables = Store::find(1)->sellables()->get();
    return view('front.index',compact('sellableTypes','sellables'));
  }
  public function menu()
  {

    return view('front.menu');
  }
}
