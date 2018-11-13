<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Store;
use App\SellableType;
use App\Sellable;
use App\Order;


class ShoppingCartController extends Controller
{

  function __construct()
  {
    // $this->middleware('auth:api');
    $this->middleware('auth');

  }

  public function showOrdersApi()
  {
    $user = Auth::user();
    $orders = Order::where('id_client',$user->client->id)->with('client')->with('status')->get();
    // $orders = $user->client->orders->with('client')->get();

    return $orders->toJson();
  }

  public function showOrders()
  {
    $user = Auth::user();
    $orders = $user->client->orders;


    return view('front.myorders',compact('orders'));
  }

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
  public function save(Request $request)
  {



    $order = new Order;
    $order->id_client=Auth::user()->client->id;
    $order->id_status = 1;
    $order->id_store = $request->id_store;
    $order->save();
    foreach($request->input("products") as $product){
      $store = Store::findOrFail($request->input('id_store'));

      $sellable= $store->sellables()->where('id', $product)->first();

      $price = $sellable->pivot->price;
      $amount = $request->input("count_".$product);

      $order->sellables()->attach($sellable->id,['amount'=>$amount,'price'=>$price]);
    }
    $order->save();
     return redirect()->route('show-my-orders');
  }

}
