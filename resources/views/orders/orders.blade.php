@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Pedidos
                </div>


                <a class="float-right btn btn-primary btn-lg" href="/admin/pedidos/agregar">Nuevo</a>


                <div class="panel-body">
                  <table class="table">
                    <thead>
                      <tr>

                        <th scope="col">Cliente</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Tienda</th>
                        <th scope="col">Precio total</th>
                        <th scope="col">Detalle</th>
                        <th scope="col">Creado</th>
                        <th scope="col">Editado</th>
                        <th scope="col">Acciones</th>

                      </tr>
                    </thead>
                    <tbody>
                        @foreach($orders as $order)
                          <tr>

                            <td>  {{ $order->client->name}} </td>
                            <td>  {{ $order->status->name }} </td>
                            <td>  {{ $order->store->name }} </td>
                            <td>  {{ $order->total_price }} </td>
                            <td>  <a href="/admin/pedidos/{{$order->id}}/detalle/"></a> </td>
                            <td>  {{ $order->created_at }} </td>
                            <td>  {{ $order->updated_at }} </td>

                            <td>
                              <form class="" action="/admin/pedidos/{{$order->id}}/eliminar" method="post">
                                {{ csrf_field() }}
                                {{ method_field('delete') }}
                                <a class="btn btn-sm btn-warning" href="/admin/pedidos/{{$order->id}}/editar">Editar</a>
                                <input class="btn btn-sm btn-danger" type="submit" name="" value="Eliminar">

                              </form>

                            </td>

                          </tr>
                        @endforeach
                    </tbody>
                  </table>

                  {{$orders->links()}}

                </div>
           </div>
         </div>
    </div>
</div>




@endsection