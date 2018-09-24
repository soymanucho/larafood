@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Ciudades
                  {{-- <form action="/admin/ingredientes/agregar"><input type="submit" value="Nuevo" /></form> --}}
                </div>


                <a class="float-right btn btn-primary btn-lg" href="/admin/ciudades/agregar">Nuevo</a>


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

                          {{-- <form class="" action="/admin/ingredientes/{{$ingredient->id}}/editar" method="get">
                            {{ csrf_field() }}
                            <input type="submit" name="" value="Editar">
                          </form> --}}
                        </td>



                      </tr>
                        @endforeach
                    </tbody>
                  </table>

                  {{$cities->links()}}

                </div>
           </div>
         </div>
    </div>
</div>




@endsection