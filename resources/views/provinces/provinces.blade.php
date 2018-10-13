@extends('layouts.app')

@section('title')
  Provincias
@endsection

@section('breadcrumb-items')
  <li><a href="{!! route('country-show') !!}"><i class="fa "></i> Paises</a></li>
  <li><a href="{!! route('province-show') !!}"><i class="fa "></i> Provincias</a></li>
@endsection

@section('content')


  <a class="float-right btn btn-primary btn-lg" href="/admin/provincias/agregar">Nuevo</a>


  <div class="panel-body">
    <table class="table">
      <thead>
        <tr>

          <th scope="col">País</th>
          <th scope="col">Provincia</th>
          <th scope="col">Creado</th>
          <th scope="col">Editado</th>
          <th scope="col">Acciones</th>

        </tr>
      </thead>
      <tbody>
          @foreach($provinces as $province)
        <tr>

          <td>  {{ $province->country->name }}</td>
          <td>  {{ $province->name }}</td>
          <td>  {{ $province->created_at }}</td>
          <td>  {{ $province->updated_at }}</td>

          <td>
            <form class="" action="/admin/provincias/{{$province->id}}/eliminar" method="post">
              {{ csrf_field() }}
              {{ method_field('delete') }}
              <a class="btn btn-sm btn-warning" href="/admin/provincias/{{$province->id}}/editar">Editar</a>
              <input class="btn btn-sm btn-danger" type="submit" name="" value="Eliminar">
            </form>

            {{-- <form class="" action="/admin/ingredientes/{{$ingredient->id}}/editar" method="get">
              {{ csrf_field() }}
              <input type="submit" name="" value="Editar">
            </form> --}}
          </td>



        </tr>
          @endforeach
      </tbody>
    </table>

    {{$provinces->links()}}

  </div>
@endsection
