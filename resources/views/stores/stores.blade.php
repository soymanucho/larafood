@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tiendas
                  {{-- <form action="/admin/ingredientes/agregar"><input type="submit" value="Nuevo" /></form> --}}
                </div>


                <a class="float-right btn btn-primary btn-lg" href="/admin/tiendas/agregar">Nuevo</a>


                <div class="panel-body">
                  <table class="table">
                    <thead>
                      <tr>

                        <th scope="col">Online</th>
                        <th scope="col">Ciudad (Provincia, País)</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">Tienda</th>
                        <th scope="col">Creado</th>
                        <th scope="col">Editado</th>
                        <th scope="col">Acciones</th>

                      </tr>
                    </thead>
                    <tbody>
                        @foreach($stores as $store)
                          <tr>

                            <td>  @if ($store->available)
                                    <button type="button" name="btn btn-outline-success">Abierto</button>
                                  @else
                                    <button type="button" class="btn btn-outline-danger">Cerrado</button>
                                  @endif
                            </td>
                            <td>  {{ $store->city->name }} ({{ $store->city->province->name }}, {{ $store->city->province->country->name }})</td>
                            <td>  {{ $store->address4 }}</td>
                            <td>  {{ $store->name }}</td>
                            <td>  {{ $store->created_at }}</td>
                            <td>  {{ $store->updated_at }}</td>

                            <td>
                              <form class="" action="/admin/tiendas/{{$store->id}}/eliminar" method="post">
                                {{ csrf_field() }}
                                {{ method_field('delete') }}
                                <a class="btn btn-sm btn-warning" href="/admin/tiendas/{{$store->id}}/editar">Editar</a>
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

                  {{$stores->links()}}

                </div>
           </div>
         </div>
    </div>
</div>




@endsection
