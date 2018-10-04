<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Store;
use App\Sellable;
class MenuController extends Controller
{
    public function show(Store $store)
    {
      
      return view('menu.menu',compact('store'));
    }
}
