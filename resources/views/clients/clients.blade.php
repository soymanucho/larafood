@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Clientes
                  {{-- <form action="/admin/ingredientes/agregar"><input type="submit" value="Nuevo" /></form> --}}
                </div>


                <a class="float-right btn btn-primary btn-lg" href="/admin/clientes/agregar">Nuevo</a>


                <div class="panel-body">
                  <table class="table">
                    <thead>
                      <tr>

                        <th scope="col">Nombre</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">Tiene usuario creado?</th>
                        <th scope="col">Creado</th>
                        <th scope="col">Editado</th>
                        <th scope="col">Acciones</th>

                      </tr>
                    </thead>
                    <tbody>
                        @foreach($clients as $client)
                          <tr>

                            <td>{{ $client->name}} </td>
                            <td>  {{ $client->phone }} </td>
                            <td>  {{ $client->address }}</td>
                            <td>  @if ($client->user)
                                    {{$client->user->email}} ({{$client->user->rol->name}})
                                  @else
                                      No
                                  @endif
                            </td>
                            <td>  {{ $client->created_at }}</td>
                            <td>  {{ $client->updated_at }}</td>

                            <td>
                              <form class="" action="/admin/clientes/{{$client->id}}/eliminar" method="post">
                                {{ csrf_field() }}
                                {{ method_field('delete') }}
                                <a class="btn btn-sm btn-warning" href="/admin/clientes/{{$client->id}}/editar">Editar</a>
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

                  {{$clients->links()}}

                </div>
           </div>
         </div>
    </div>
</div>




@endsection
