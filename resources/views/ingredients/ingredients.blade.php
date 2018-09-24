@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Ingredientes
                  {{-- <form action="/admin/ingredientes/agregar"><input type="submit" value="Nuevo" /></form> --}}
                </div>


                <a class="float-right btn btn-primary btn-lg" href="/admin/ingredientes/agregar">Nuevo</a>


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
                        @foreach($ingredients as $ingredient)
                      <tr>

                        <td>  {{ $ingredient->name }}</td>
                        <td>  {{ $ingredient->created_at }}</td>
                        <td>  {{ $ingredient->updated_at }}</td>

                        <td>
                          <form class="" action="/admin/ingredientes/{{$ingredient->id}}/eliminar" method="post">
                            {{ csrf_field() }}
                            {{ method_field('delete') }}
                            <a class="btn btn-sm btn-warning" href="/admin/ingredientes/{{$ingredient->id}}/editar">Editar</a>
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

                  {{$ingredients->links()}}

                </div>
           </div>
         </div>
    </div>
</div>




@endsection