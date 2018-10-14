@extends('layouts.datatable')

@section('header')
  <th>País</th>
  <th>Provincia</th>
  <th>Acciones</th>
@endsection

@section('body')
   @foreach($provinces as $province)
      <tr>

        <td>  {{ $province->country->name }}</td>
        <td>  {{ $province->name }}</td>

        <td>
          <form class="" action="/admin/provincias/{{$province->id}}/eliminar" method="post">
            {{ csrf_field() }}
            {{ method_field('delete') }}
            <a class="btn btn-sm btn-warning" href="/admin/provincias/{{$province->id}}/editar">Editar</a>
            <input class="btn btn-sm btn-danger" type="submit" name="" value="Eliminar">
          </form>
        </td>
      </tr>
    @endforeach
@endsection
