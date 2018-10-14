@extends('layouts.datatable')

@section('header')
  <th>Nombre</th>
  <th>Tipo</th>
  <th>Precio</th>
  <th>Acciones</th>
@endsection

@section('body')
  @foreach($store->sellables as $sellable)
    <tr>
      <td>  {{ $sellable->name }}</td>
      <td>  {{ $sellable->type->name }}</td>
      <td>  {{ $sellable->pivot->price }}</td>
      <td>
        <form class="" action="/admin/tiendas/{{$store->id}}/menu/{{$sellable->id}}/eliminar" method="post">
          {{ csrf_field() }}
          {{ method_field('delete') }}
          <a class="btn btn-sm btn-warning" href="/admin/tiendas/{{$store->id}}/menu/{{$sellable->id}}/editar">Editar precio</a>
          <input class="btn btn-sm btn-danger" type="submit" name="" value="Eliminar"

          >
        </form>
      </td>
    </tr>
  @endforeach
@endsection
