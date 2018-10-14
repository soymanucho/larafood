@extends('layouts.datatable')

@section('header')
  <th>Nombre</th>
  <th>Acciones</th>
@endsection

@section('body')
  @foreach($countries as $country)
    <tr>

      <td>  {{ $country->name }}</td>
      <td>
        <form class="" action="/admin/paises/{{$country->id}}/eliminar" method="post">
          {{ csrf_field() }}
          {{ method_field('delete') }}
          <a class="btn btn-sm btn-warning" href="/admin/paises/{{$country->id}}/editar">Editar</a>
          <input class="btn btn-sm btn-danger" type="submit" name="" value="Eliminar">
        </form>
      </td>
    </tr>
  @endforeach
@endsection
