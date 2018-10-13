@extends('layouts.app')

@section('title')
  Comidas
@endsection

@section('breadcrumb-items')
  <li><a href="{!! route('product-show') !!}"><i class="fa "></i> Paises</a></li>

@endsection

@section('content')

                  <a class="float-right btn btn-primary btn-lg" href="{{route('sellable-new')}}">Nuevo</a>
                <div class="panel-body">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Tipo</th>
                        <th scope="col"># Prod</th>
                        <th scope="col">Acciones</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($sellables as $sellable)
                      <tr>

                        <td>  {{ $sellable->name }}</td>
                        <td>  {{ $sellable->price }}</td>
                        <td>  {{ $sellable->type->name }}</td>
                        <td>  {{ $sellable->products->count() }}</td>
                        {{-- <td>  {{ $product->childs->count() }}</td>
                        <td>  {{ $product->fathers->count() }}</td> --}}
                        {{-- <td>  {{ $product->updated_at }}</td> --}}


                        <td>
                          <form class="" action="/admin/vendibles/{{$sellable->id}}/eliminar" method="post">
                            {{ csrf_field() }}
                            {{ method_field('delete') }}
                            <a class="btn btn-sm btn-warning" href="/admin/vendibles/{{$sellable->id}}/editar">Editar</a>
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

                  {{$sellables->links()}}

                </div>
        
@endsection
