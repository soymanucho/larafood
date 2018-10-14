@extends('layouts.datatable')

@section('header')
  <th>Nombre</th>
  <th># Usos</th>
  <th>Acciones</th>
@endsection

@section('body')
  @foreach($ingredients as $ingredient)
    <tr>

      <td>  {{ $ingredient->name }}</td>
      <td>  {{ $ingredient->products->count() }}</td>
      <td>
        <form class="" action="/admin/ingredientes/{{$ingredient->id}}/eliminar" method="post">
          {{ csrf_field() }}
          {{ method_field('delete') }}
          <a class="btn btn-sm btn-warning" href="/admin/ingredientes/{{$ingredient->id}}/editar">Editar</a>
          <input class="btn btn-sm btn-danger" type="submit" name="" value="Eliminar"
          @if ($ingredient->products->count()!=0)
            disabled
          @endif
          >
        </form>
      </td>

    </tr>
  @endforeach
@endsection
