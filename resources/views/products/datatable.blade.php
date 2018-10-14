@extends('layouts.datatable')

@section('header')
  <th>Categoría</th>
  <th>Nombre</th>
  <th># Usos</th>
  <th># Ingr</th>
  <th>Acciones</th>
@endsection

@section('body')
  @foreach($products as $product)
      <tr>

        <td>  {{ $product->type->name }}</td>
        <td>  {{ $product->name }}</td>
        <td>  {{ $product->sellables->count() }}</td>
        <td>  {{ $product->ingredients->count() }}</td>
        <td>
          <form class="" action="/admin/productos/{{$product->id}}/eliminar" method="post">
            {{ csrf_field() }}
            {{ method_field('delete') }}
            <a class="btn btn-sm btn-warning" href="/admin/productos/{{$product->id}}/editar">Editar</a>
            <input class="btn btn-sm btn-danger" type="submit" name="" value="Eliminar"
             @if ($product->sellables->count()!=0)
              disabled
            @endif
            >
          </form>
        </td>

      </tr>
  @endforeach
@endsection
