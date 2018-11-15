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
                            <div class="col-lg-4 col-xs-6">
                                <div class="small-box bg-aqua">
                                  <div class="inner">
                                   <h3>{{$store->sellables->count()}}</h3>
                                   <div class="icon">
                                     <i class="ion ion-pizza"></i>
                                   </div>
                                   <p>Total Items</p>
                                 </div>
                                 <a href="#" class="small-box-footer">Más info <i class="fa fa-arrow-circle-right"></i></a>

                              </div>
                            </div>
                            <div class="col-lg-4 col-xs-6">
                              <!-- small box -->
                              <div class="small-box bg-red">
                                <div class="inner">
                                  <h3>${{$store->sellables->sum('pivot.price')}}</h3>

                                  <p>Precio Total del menu</p>
                                </div>
                                <div class="icon">
                                  <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="#" class="small-box-footer">Más info <i class="fa fa-arrow-circle-right"></i></a>
                              </div>
                            </div>

                            <div class="col-lg-4 col-xs-6">
                              <!-- small box -->
                              <div class="small-box bg-green">
                                <div class="inner">
                                  <h3><sup style="font-size: 20px">$</sup>{{$store->sellables->avg('pivot.price')}}</h3>

                                  <p>Precio Promedio por Item</p>
                                </div>
                                <div class="icon">
                                  <i class="ion ion-cart"></i>
                                </div>
                                <a href="#" class="small-box-footer">Más info <i class="fa fa-arrow-circle-right"></i></a>
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
