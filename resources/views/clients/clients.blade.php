@extends('layouts.app')

@section('title')
  Clientes
@endsection

@section('breadcrumb-items')
  <li><a href="{!! route('store-show') !!}"><i class="fa "></i> Tiendas</a></li>
  <li class="active">Clientes</li>
@endsection

@section('content')
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
                             <h3>{{$clients->count()}}</h3>
                             <div class="icon">
                               <i class="ion ion-person"></i>
                             </div>
                             <p>Total Clientes</p>
                           </div>
                           <a href="#" class="small-box-footer">Más info <i class="fa fa-arrow-circle-right"></i></a>

                        </div>
                      </div>
                      <div class="col-lg-4 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-red">
                          <div class="inner">
                            <h3>${{$totalPrice}}</h3>

                            <p>Precio Total de los pedidos</p>
                          </div>
                          <div class="icon">
                            <i class="ion ion-pie-graph"></i>
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
  <a class="float-right btn btn-success btn-lg" href="/admin/clientes/agregar">Nuevo</a>
  <br><br>

  @include('clients.datatable')

@endsection
