@extends('layouts.app')

@section('title')
  Ingredientes
@endsection

@section('breadcrumb-items')
  <li><a href="{!! route('product-show') !!}"><i class="fa "></i> Productos</a></li>
  <li class="active"> Ingredientes</li>
@endsection

@section('content')
  <a class="float-right btn btn-primary btn-lg" href="/admin/ingredientes/agregar">Nuevo</a>
  <div class="panel-body">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Nombre</th>
          <th scope="col"># Prod. usandolo</th>
          <th scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody>
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
      </tbody>
    </table>

    {{$ingredients->links()}}

  </div>
@endsection
