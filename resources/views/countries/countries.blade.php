@extends('layouts.app')

@section('title')
  Paises
@endsection

@section('breadcrumb-items')
  <li class="active"> Paises</li>
@endsection

@section('content')
  <a class="float-right btn btn-primary btn-lg" href="/admin/paises/agregar">Nuevo</a>
  <div class="panel-body">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Nombre</th>
          <th scope="col">Creado</th>
          <th scope="col">Editado</th>
          <th scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody>
          @foreach($countries as $country)
        <tr>

          <td>  {{ $country->name }}</td>
          <td>  {{ $country->created_at }}</td>
          <td>  {{ $country->updated_at }}</td>

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
      </tbody>
    </table>

    {{$countries->links()}}

  </div>

@endsection
