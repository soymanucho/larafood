@extends('layouts.app')

@section('title')
  Menu de tienda {{$store->name}}
@endsection

@section('breadcrumb-items')
  <li><a href="{!! route('store-show') !!}"><i class="fa "></i> Tienda</a></li>
  <li class="active">Menu</li>
@endsection

@section('content')
    <div class="panel-body">
                      <div class="card">
                          <div class="card-body">
                              <div class="d-md-flex align-items-center">
                                  <div>
                                      <h4 class="card-title">Estadisticas de menu</h4>
                                      {{-- <h5 class="card-subtitle">Overview of Latest Month</h5> --}}
                                  </div>
                              </div>
                              <div class="row">
                                  <!-- column -->

                                  <div class="col-lg-12">
                                      <div class="row">
                                          <div class="col-4  m-t-15">
                                              <div class="bg-dark p-10 text-white text-center">
                                                 <i class="fa fa-user m-b-5 font-16"></i>
                                                 <h5 class="m-b-0 m-t-5">{{$store->sellables->count()}}</h5>
                                                 <small class="font-light">Total Items</small>
                                              </div>
                                          </div>
                                           <div class="col-4  m-t-15">
                                              <div class="bg-dark p-10 text-white text-center">
                                                 <i class="fa fa-plus m-b-5 font-16"></i>
                                                 <h5 class="m-b-0 m-t-5">${{$store->sellables->sum('pivot.price')}}</h5>
                                                 <small class="font-light">Precio Total del menu</small>
                                              </div>
                                          </div>
                                          <div class="col-4 m-t-15">
                                              <div class="bg-dark p-10 text-white text-center">
                                                 <i class="fa fa-cart-plus m-b-5 font-16"></i>
                                                 <h5 class="m-b-0 m-t-5">${{$store->sellables->avg('pivot.price')}}</h5>
                                                 <small class="font-light">Precio Promedio por Item</small>
                                              </div>
                                          </div>



                                      </div>
                                  </div>
                                  <!-- column -->
                              </div>
                          </div>
                      </div>
              <div class="card">
                <div class="card-body">
                      <a class="float-right btn btn-primary btn-lg" href="/admin/tiendas/{{$store->id}}/menu/agregar">Nuevo</a>
                    <div class="panel-body">
                      <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Acciones</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($store->sellables as $sellable)
                            <tr>
                              <td>  {{ $sellable->name }}</td>
                              <td>  {{ $sellable->type->name }}</td>
                              <td>  {{ $sellable->pivot->price }}</td>
                              <td>
                                <form class="" action="/admin/tiendas/{{$store->id}}/menu/{{$sellable->id}}/eliminar" method="post">
                                  {{ csrf_field() }}
                                  {{ method_field('delete') }}
                                  <a class="btn btn-sm btn-warning" href="/admin/tiendas/{{$store->id}}/menu/{{$sellable->id}}/editar">Editar precio</a>
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
    </div>
</div>




@endsection
