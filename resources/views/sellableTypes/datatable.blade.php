@extends('layouts.datatable')

@section('header')
  <th>Nombre</th>
  <th># Prod. de este tipo</th>
  <th>Acciones</th>
@endsection

@section('body')
  @foreach($sellableTypes as $sellableType)
    <tr>
      <td>  {{ $sellableType->name }}</td>
      <td>  {{ $sellableType->sellables->count() }}</td>
      <td>
        <form class="" action="/admin/tiposDeProducto/{{$sellableType->id}}/eliminar" method="post">
          {{ csrf_field() }}
          {{ method_field('delete') }}
          <a class="btn btn-sm btn-warning" href="/admin/tiposDeProducto/{{$sellableType->id}}/editar">Editar</a>
          <input class="btn btn-sm btn-danger" type="submit" name="" value="Eliminar"
          @if ($sellableType->sellables->count()!=0)
            disabled
          @endif
          >
        </form>
      </td>
    </tr>
  @endforeach
@endsection
