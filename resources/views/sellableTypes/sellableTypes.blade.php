@extends('layouts.app')

@section('title')
  Nueva Ciudad
@endsection

@section('breadcrumb-items')

  <li><a href="{!! route('sellabletype-show') !!}"><i class="fa "></i> Tipos de Productos</a></li>

@endsection

@section('content')


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
                        @foreach($sellableTypes as $sellableType)
                      <tr>

                        <td>  {{ $sellableType->name }}</td>
                        <td>  {{ $sellableType->created_at }}</td>
                        <td>  {{ $sellableType->updated_at }}</td>
                        <td>  {{ $sellableType->products->count() }}</td>

                        <td>
                          <form class="" action="/admin/tiposDeProducto/{{$sellableType->id}}/eliminar" method="post">
                            {{ csrf_field() }}
                            {{ method_field('delete') }}
                            <a class="btn btn-sm btn-warning" href="/admin/tiposDeProducto/{{$sellableType->id}}/editar">Editar</a>
                            <input class="btn btn-sm btn-danger" type="submit" name="" value="Eliminar"
                            @if ($sellableType->products->count()!=0)
                              disabled
                            @endif
                            >
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

                  {{$sellableTypes->links()}}

                </div>
           </div>
         </div>
    </div>
</div>




@endsection
