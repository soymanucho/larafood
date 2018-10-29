<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Order;
use App\Client;
use App\Sellable;
use App\Store;
use App\User;

class OrderController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }

  public function modal(Order $order)
  {
    return view('modals.detail_order',compact('order'));
  }
  public function myshow()
  {
    $store = Auth::user()->store;
    $orders = $store->orders()->orderby('id')->with('client')->get();
    return view('orders.orders',compact('orders','store'));
  }

  public function show(Store $store)
  {
    $orders = $store->orders()->orderby('id')->with('client')->get();
    return view('orders.orders',compact('orders','store'));
  }

  public function delete(Store $store,Order $order)
  {
    $order->delete();
    return redirect('admin/pedidos');
  }

  public function new(Store $store)
  {

    $clients = Client::All();
    $order = new Order();

    $sellables = $store->sellables;
    return view('orders.newOrder',compact('order','clients','sellables','store'));
  }

  public function save(Request $request)
  {
    $this->validate(
      $request,
      [
          'id_client' => 'required|exists:clients,id',
          // 'total_price' => 'required|numeric|max:20',
          // 'id_status'=> 'required|exists:status,id',
          'id_store'=>'required|exists:stores,id',
          'sellables'=>'required|array',
          'sellables.*'=> 'required|integer|distinct|exists:sellables,id',

      ],
      [

      ],
      [
          'id_client' => 'cliente',
          // 'total_price' => 'precio total',
          // 'id_status' => 'estado',
          'sellables' => 'productos',
          'id_store' => 'tienda',
      ]
  );
  $order = new Order;
  $order->fill($request->all());
  $order->id_status = 1;
  $order->save();

  $order->sellables()->attach($request->input('sellables'),['amount'=>1,'price'=>1]);
  $order->save();





  return redirect()->route('myorder-show');
  }

  public function edit(Store $store,Order $order)
  {
    $clients = Client::all();
    $sellables = $store->sellables;
    return view('orders.editOrder',compact('order','clients','store','sellables'));
  }

   public function update(Order $order, Request $request)
  {
    $this->validate(
      $request,
      [
          'id_client' => 'required|exists:clients,id',
          'total_price' => 'required|numeric|max:20',
          'id_status'=> 'required|exists:status,id',
          'id_store'=>'nullable|exists:stores,id',

      ],
      [

      ],
      [
          'id_client' => 'cliente',
          'total_price' => 'precio total',
          'id_status' => 'estado',
          'id_store' => 'tienda',
      ]
  );
  $order->fill($request->all());
  $order->save();

  return redirect()->route('myorder-show');
  }
}
