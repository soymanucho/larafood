@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Menu de tienda {{$store->name}}

                </div>
                  <a class="float-right btn btn-primary btn-lg" href="/admin/productos/agregar">Nuevo</a>
                <div class="panel-body">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Acciones</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($store->sellables as $sellable)
                      <tr>

                        <td>  {{ $sellable->name }}</td>
                        <td>  {{ $sellable->pivot->price }}</td>


                        <td>
                          <form class="" action="/admin/productos/{{$sellable->id}}/eliminar" method="post">
                            {{ csrf_field() }}
                            {{ method_field('delete') }}
                            <a class="btn btn-sm btn-warning" href="/admin/productos/{{$sellable->id}}/editar">Editar</a>
                            <input class="btn btn-sm btn-danger" type="submit" name="" value="Eliminar"
                             {{-- @if ($product->childs->count()!=0||$product->fathers->count()!=0||$product->ingredients->count()!=0)
                              disabled
                            @endif --}}
                            >
                          </form>



                        </td>



                      </tr>
                        @endforeach
                    </tbody>
                  </table>

                  {{-- {{$products->links()}} --}}

                </div>
           </div>
         </div>
    </div>
</div>




@endsection
