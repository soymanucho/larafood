@extends('layouts.app')

@section('title')
  Menu de tienda {{$store->name}}
@endsection

@section('breadcrumb-items')
  <li><a href="{!! route('dashboard-show') !!}"><i class="fa "></i> Inicio</a></li>
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

        <a class="float-right btn btn-success btn-lg" href="/admin/tiendas/{{$store->id}}/menu/agregar">Nuevo</a>
        <br><br>
        @include('menu.datatable')

   </div>

@endsection
