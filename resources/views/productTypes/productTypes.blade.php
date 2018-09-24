@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tipos de producto
                  {{-- <form action="/admin/ingredientes/agregar"><input type="submit" value="Nuevo" /></form> --}}
                </div>


                <a class="float-right btn btn-primary btn-lg" href="/admin/tiposDeProducto/agregar">Nuevo</a>


                <div class="panel-body">
                  <table class="table">
                    <thead>
                      <tr>

                        <th scope="col">Nombre</th>
                        <th scope="col">Creado</th>
                        <th scope="col">Editado</th>
                        <th scope="col"># Prod. de este tipo</th>
                        <th scope="col">Acciones</th>

                      </tr>
                    </thead>
                    <tbody>
                        @foreach($productTypes as $productType)
                      <tr>

                        <td>  {{ $productType->name }}</td>
                        <td>  {{ $productType->created_at }}</td>
                        <td>  {{ $productType->updated_at }}</td>
                        <td>  {{ $productType->product->count() }}</td>

                        <td>
                          <form class="" action="/admin/tiposDeProducto/{{$productType->id}}/eliminar" method="post">
                            {{ csrf_field() }}
                            {{ method_field('delete') }}
                            <a class="btn btn-sm btn-warning" href="/admin/tiposDeProducto/{{$productType->id}}/editar">Editar</a>
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

                  {{$productTypes->links()}}

                </div>
           </div>
         </div>
    </div>
</div>




@endsection
