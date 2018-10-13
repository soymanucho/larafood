@extends('layouts.app')

@section('title')
  Ciudades
@endsection

@section('breadcrumb-items')
  <li><a href="{!! route('country-show') !!}"><i class="fa "></i> Paises</a></li>
  <li><a href="{!! route('province-show') !!}"><i class="fa "></i> Provincias</a></li>
  <li class="active">Ciudades</li>
@endsection


@section('content')
  <a class="float-right btn btn-primary btn-lg" href="/admin/ciudades/agregar">Nueva</a>
  <br><br>
  <div class="box">
    <div class="box-header">

    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table id="example2" class="table table-bordered table-hover">
        <thead>
        <tr>
          <th>País</th>
          <th>Provincia</th>
          <th>Ciudad</th>
          <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
          @foreach($cities as $city)
            <tr>

              <td>  {{ $city->province->country->name }}</td>
              <td>  {{ $city->province->name }}</td>
              <td>  {{ $city->name }}</td>

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
        <tfoot>
        <tr>
          <th>País</th>
          <th>Provincia</th>
          <th>Ciudad</th>
          <th>Acciones</th>
        </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.box-body -->
  </div>
        <!-- /.box -->

@endsection
