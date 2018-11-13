@extends('layouts.datatable')

@section('header')
  <th>ID Pedido</th>
  <th>Cliente</th>
  <th>Estado</th>
  {{-- <th>Tienda</th> --}}
  <th>Precio</th>
  <th>Acciones</th>
@endsection

@section('body')
  @foreach($orders as $order)
      <tr>
        <td>{{$order->id}}</td>
        <td>  {{ $order->client->name }}</td>
        <td><span class="label" style="background-color:{{$order->status->color}}">{{$order->status->name}}</span></td>
        {{-- <td>  {{ $order->store->name }}</td> --}}
        <td>  ${{ $order->total_price }}</td>

        <td>

          <form class="" action="/admin/tiendas/{{$order->store->id}}/pedidos/{{$order->id}}/eliminar" method="post">
            {{ csrf_field() }}
            {{ method_field('delete') }}
            <a class="btn btn-sm btn-warning" href="/admin/tiendas/{{$order->store->id}}/pedidos/{{$order->id}}/editar">Editar</a>
            <input class="btn btn-sm btn-danger" type="submit" name="" value="Eliminar">
          </form>
        </td>

      </tr>
  @endforeach
@endsection
