@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-15 col-md-offset-1">
            <div class="panel panel-default">
                <h4 class="page-title">Tiendas</h4>


                <a class="float-right btn btn-primary btn-lg" href="/admin/tiendas/agregar">Nueva tienda</a>


                <div class="panel-body">
                  <table class="table">
                    <thead>
                      <tr>

                        <th scope="col">Online</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">Tienda</th>
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
                            <td>  {{ $store->address }} ({{ $store->city->name }})</td>
                            <td>  {{ $store->name }}</td>


                            <td>
                              <form class="" action="/admin/tiendas/{{$store->id}}/eliminar" method="post">
                                {{ csrf_field() }}
                                {{ method_field('delete') }}
                                <a class="btn btn-sm btn-success" href="/admin/tiendas/{{$store->id}}/pedido/agregar">Nuevo Pedido</a>
                                <a class="btn btn-sm btn-info" href="/admin/tiendas/{{$store->id}}/menu">Menu</a>
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
