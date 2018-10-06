<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Client;
use App\Sellable;
use App\Store;

class OrderController extends Controller
{
  public function show()
  {
    $orders = Order::orderby('id')->with('client')->paginate(10);
    return view('orders.orders',compact('orders'));
  }

  public function delete(Order $order)
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
  $order->total_price = 0;
  $order->save();

  $order->sellables()->attach($request->input('sellables'),['amount'=>1,'price'=>1]);
  $order->calculateTotalPrice();
  $order->save();



  return redirect('/admin/pedidos/');
  }

  public function edit(Order $order)
  {

    return view('orders.editOrder',compact('order'));
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

  return redirect('/admin/pedidos/');
  }
}
