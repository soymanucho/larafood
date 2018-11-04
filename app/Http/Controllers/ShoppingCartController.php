<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Store;
use App\SellableType;


class ShoppingCartController extends Controller
{
  public function modalStore()
  {
    $stores = Store::all();
    return view('modals.shopping_cart',compact('stores'));
  }

  public function modalProduct(Request $request)
  {
    $store = Store::findOrFail($request->input('store'));
    $sellables = $store->sellables;
    $sellableTypes = SellableType::all();

    return view('front.menu',compact('store','sellables','sellableTypes'));
  }

}
