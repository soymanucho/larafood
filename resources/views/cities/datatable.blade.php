@extends('layouts.datatable')

@section('header')
  <th>Ciudad</th>
  <th>Provincia</th>
  <th>País</th>
  <th>Acciones</th>
@endsection

@section('body')
  @foreach($cities as $city)
    <tr>
      <td>  {{ $city->name }}</td>
      <td>  {{ $city->province->name }}</td>
      <td>  {{ $city->province->country->name }}</td>
      <td>
        <form class="" action="/admin/ciudades/{{$city->id}}/eliminar" method="post">
          {{ csrf_field() }}
          {{ method_field('delete') }}
          <a class="btn btn-sm btn-warning" href="/admin/ciudades/{{$city->id}}/editar">Editar</a>
          <input class="btn btn-sm btn-danger" type="submit" name="" value="Eliminar">
        </form>
      </td>
    </tr>
  @endforeach
@endsection
