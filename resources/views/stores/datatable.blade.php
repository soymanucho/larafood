@extends('layouts.datatable')

@section('header')
  <th>Online</th>
  <th>Dirección</th>
  <th>Tienda</th>
  <th>Acciones</th>
@endsection

@section('body')
  @foreach($stores as $store)
    <tr>
      <td>  @if ($store->available)
              <button type="button" name="btn btn-outline-success">Abierto</button>
            @else
              <button type="button" class="btn btn-outline-danger">Cerrado</button>
            @endif
      </td>
      <td>  {{ $store->address }} ({{ $store->city->name }})</td>
      <td>  {{ $store->name }}</td>

      <td>
        <form class="" action="/admin/tiendas/{{$store->id}}/eliminar" method="post">
          {{ csrf_field() }}
          {{ method_field('delete') }}
          <a class="btn btn-sm btn-success" href="/admin/tiendas/{{$store->id}}/pedidos">Pedidos</a>
          <a class="btn btn-sm btn-info" href="/admin/tiendas/{{$store->id}}/menu">Menu</a>
          <a class="btn btn-sm btn-warning" href="/admin/tiendas/{{$store->id}}/editar">Editar</a>
          <input class="btn btn-sm btn-danger" type="submit" name="" value="Eliminar">

        </form>

      </td>
    </tr>
  @endforeach
@endsection
