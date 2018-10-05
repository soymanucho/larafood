<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller
{
  public function show()
  {
    $orders = Order::orderby('name')->with('client')->paginate(10);
    return view('orders.orders',compact('orders'));
  }

  public function delete(Order $order)
  {
    $order->delete();
    return redirect('admin/pedidos');
  }

  public function new()
  {
    $order = new Order();
    return view('orders.newOrder',compact('order'));
  }

  public function save(Request $request)
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
  $order = new Order;
  $order->fill($request->all());
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
