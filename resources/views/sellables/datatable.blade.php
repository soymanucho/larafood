@extends('layouts.datatable')

@section('header')
  <th>Nombre</th>
  <th>Tipo</th>
  <th># Prod</th>
  <th>Acciones</th>
@endsection

@section('body')
  @foreach($sellables as $sellable)
    <tr>
      <td>  {{ $sellable->name }}</td>
      <td>  {{ $sellable->type->name }}</td>
      <td>  {{ $sellable->products->count() }}</td>
      <td>
        <form class="" action="/admin/vendibles/{{$sellable->id}}/eliminar" method="post">
          {{ csrf_field() }}
          {{ method_field('delete') }}
          <a class="btn btn-sm btn-warning" href="/admin/vendibles/{{$sellable->id}}/editar">Editar</a>
          <input class="btn btn-sm btn-danger" type="submit" name="" value="Eliminar"
           @if ($sellable->products->count()!=0)
            disabled
          @endif
          >
        </form>
      </td>
    </tr>
  @endforeach
@endsection
