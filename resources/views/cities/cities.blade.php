@extends('layouts.app')
@extends('errors.errors')

@section('content')
  <section class="content-header">
    <h1>
      Ciudades
      <small>Version 1.0</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="{!! route('country-show') !!}"><i class="fa "></i> Paises</a></li>
      <li><a href="{!! route('province-show') !!}"><i class="fa "></i> Provincias</a></li>
      <li class="active">Ciudades</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

                <a class="float-right btn btn-primary btn-lg" href="/admin/ciudades/agregar">Nuevo</a>

                @include('errors.errors')
                <div class="panel-body">
                  <table class="table">
                    <thead>
                      <tr>

                        <th scope="col">País</th>
                        <th scope="col">Provincia</th>
                        <th scope="col">Ciudad</th>
                        <th scope="col">Creado</th>
                        <th scope="col">Editado</th>
                        <th scope="col">Acciones</th>

                      </tr>
                    </thead>
                    <tbody>
                        @foreach($cities as $city)
                      <tr>

                        <td>  {{ $city->province->country->name }}</td>
                        <td>  {{ $city->province->name }}</td>
                        <td>  {{ $city->name }}</td>
                        <td>  {{ $city->created_at }}</td>
                        <td>  {{ $city->updated_at }}</td>

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
                    </tbody>
                  </table>

                  {{$cities->links()}}

                </div>
  </section>




@endsection
