@extends('layouts.app')

@section('title')
  Inicio
@endsection

@section('breadcrumb-items')
  <li class="active">Inicio</li>
@endsection


@section('content')

  <div class="row">
    <div class="col-md-12">
      <div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">PEDIDOS</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>
        <!-- /.box-header -->

            <div class="box-body no-padding">
              <div class="row">
                @foreach ($statuses as $status)
                  <div class="col-md-6">
                    <div class="box box-default collapsed-box no-margin" style="background-color: {{$status->color}}">
                      <div class="box-header with-border no-padding">
                        <div class="info-box" style="background-color: {{$status->color}}">
                          <div class="info-box-content">
                           @if(isset($store))
                           <span class="info-box-text" style='color:white'>{{$status->name}} </span>
                            {{dd($status)}}
                            <span class="info-box-number" style='color:white'>{{$store->numberOfOrdersInStatus($status)}}  (${{$store->totalPriceOfOrdersInStatus($status)}})</span>

                            <div class="progress">
                              <div class="progress-bar" style="width: {{$store->percentageOfOrdersInStatus($status)}}%"></div>
                            </div>
                            <span class="progress-description" style='color:white'>
                                  {{$store->percentageOfOrdersInStatus($status)}}%
                                </span>
                            @endif
                          </div>
                          <!-- /.info-box-content -->
                        </div>

                        <div class="box-tools pull-right">
                          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                          </button>
                        </div>
                        <!-- /.box-tools -->
                      </div>
                      <!-- /.box-header -->
                      <div class="box-body">
                      @if(isset($store))
                        <div class="table-responsive" style="background-color: white">
                          <table class="table no-margin">
                              <thead>
                              <tr>
                                <th>ID Pedido</th>
                                <th>Cliente</th>
                                <th>Precio</th>
                                <th>Tienda</th>
                                <th>Creado hace</th>
                                @if ($status->is_final == false)
                                  <th>Acciones</th>
                                @endif
                              </tr>
                              </thead>
                              <tbody>
                                @foreach ($store->orders->where('id_status', $status->id) as $order)
                                    <tr>
                                      <td><a class="fancybox" href="{{ route('modal-order', compact('order')) }}">{{$order->id}}</a></td>
                                      <td><a class="fancybox" href="{{ route('modal-client', ['client'=>$order->client]) }}">{{$order->client->name}}</a></td>
                                      <td><a class="fancybox" href="{{ route('modal-order', compact('order')) }}">${{$order->total_price}}</a></td>
                                      <td><a href="">{{$order->store->name}}</a></td>
                                      <td><a class="fancybox" href="{{ route('modal-order', compact('order')) }}">{{$order->elapsedMinutes()}} min</a></td>
                                      <td>
                                        @foreach ($order->status->nextStatuses as $status)
                                          <form method="post" action={!! route('change-status') !!}>
                                            {{ csrf_field() }}
                                            {{ method_field('put') }}
                                            <input type="text" name="order" value="{{$order->id}}" hidden>
                                            <input type="text" name="status" value="{{$status->id}}" hidden>
                                            <input class="btn btn-sm btn-primary" type="submit" style="background-color: {{$status->color}}" value="Pasar a {{$status->name}}" name="submit"/>
                                          </form>
                                        @endforeach </td>
                                    </tr>
                                @endforeach
                              </tbody>
                          </table>
                        </div>
                       @endif
                      </div>
                        <!-- /.box-body -->
                    </div>
                  </div>
                @endforeach
              </div>
            </div>

      </div>
      <!-- /.info-box-content -->
    </div>

    <!-- /.col -->
  </div>
  <div class="row">
    <div class="col-md-6">
      <!-- USERS LIST -->
      <div class="box box-danger">
        <div class="box-header with-border">
          <h3 class="box-title">Clientes recientes</h3>

          <div class="box-tools pull-right">
          @if(isset($todayClients))
            <span class="label label-danger">{{$todayClients->count()}} Nuevos Clientes Hoy</span>
          @endif
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
            </button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">
          <ul class="users-list clearfix">
          @if(isset($clients))
            @foreach ($clients as $client)
              <li>
                <img src="dist/img/user-128x128.jpg" alt="User Image">
                <a class="users-list-name fancybox" href="{{ route('modal-client', compact('client')) }}">{{$client->name}}</a>
                <span class="users-list-date">@if ($client->user)
                  <a href="mailto:{{$client->user->email}}?Subject=Hola%20de%20nuevo" >{{$client->user->email}}</a>
                @endif</span>
              </li>
            @endforeach
           @endif
          </ul>
          <!-- /.users-list -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer text-center">
          <a href={!! route('client-show') !!} class="uppercase">Ver todos los usuarios</a>
        </div>
        <!-- /.box-footer -->
      </div>
      <!--/.box -->
    </div>
    <div class="col-md-6">

      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Últimos pedidos</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
        @if(isset($lastOrders))
          <div class="table-responsive">
            <table class="table no-margin">
              <thead>
              <tr>
                <th>ID Pedido</th>
                <th>Cliente</th>
                <th>Estado</th>
                <th>Precio</th>
              </tr>
              </thead>
              <tbody>
                @foreach($lastOrders as $order)
                    <tr>
                      <td>  {{$order->id}}</td>
                      <td>  {{ $order->client->name }}</td>
                      <td><span class="label" style="background-color:{{$order->status->color}}">{{$order->status->name}}</span></td>
                      {{-- <td>  {{ $order->store->name }}</td> --}}
                      <td>  ${{ $order->total_price }}</td>
                    </tr>
                @endforeach
              </tbody>
            </table>
          </div>
         @endif
          <!-- /.table-responsive -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer clearfix">

          <a href="{!! route('order-new',compact('store')) !!}" class="btn btn-sm btn-info btn-flat pull-left">Realizar nuevo pedido</a>
          <a href="{!! route('order-show',compact('store')) !!}" class="btn btn-sm btn-default btn-flat pull-right">Ver todos los pedidos</a>
        </div>
        <!-- /.box-footer -->
      </div>

    </div>

  </div>
  <div class="row">
    <!-- Left col -->

      <div class="col-md-6">

        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Productos recientemente agregados</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <ul class="products-list product-list-in-box">
            @if(isset($lastSellables))
              @foreach ($lastSellables as $sellable)
                <li class="item">
                  <div class="product-img">
                    <img src="dist/img/default-50x50.gif" alt="Product Image">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">{{$sellable->name}}
                      <span class="label label-info pull-right">{{$sellable->fechaF()}}</span></a>
                    <span class="product-description">
                          {{$sellable->description}}
                        </span>
                  </div>
                </li>
              @endforeach
             @endif
            </ul>
          </div>
          <!-- /.box-body -->
          <div class="box-footer text-center">
            <a href={!! route('sellable-show') !!} class="uppercase">Ver todos los productos</a>
          </div>
          <!-- /.box-footer -->
        </div>

      </div>
  </div>
  {{-- <script type="text/javascript">
        var http = new XMLHttpRequest;
        http.onreadystatechange = function() {

<<<<<<< HEAD
          if(this.readyState == 4 && this.status == 200) {
            //status == 200: significa que el servidor no devolvió ningún error,
            //y la solicitud se completó ok

              var result = JSON.parse(this.responseText);
              //console.log(resultado);
              document.querySelector('.box-success > div:nth-child(1)').innerHTML = '';
              result.statuses.forEach(function(status) {
                var html = '<div class="box-body no-padding"><div class="box box-default collapsed-box" style="background-color: '+status.color+'"><div class="box-header with-border"><div class="info-box" style="background-color: '+status.color+'"><span class="info-box-icon"><i class="ion ion-ios-more"></i></span><div class="info-box-content"><span class="info-box-text" style="color:white">'+status.name+' </span><span class="info-box-number" style="color:white">bla  ($bla)</span><div class="progress"><div class="progress-bar" style="width: 50%"></div></div><span class="progress-description" style="color:white">50%</span></div></div></div></div></div>';

                document.querySelector('.box-success > div:nth-child(1)').innerHTML += html;

            });
            setInterval(function() {
              var apitoken = '{!!Auth::user()->api_token!!}';
              http.open('GET', 'http://127.0.0.1:8000/api/admin/dashboard?api_token='+apitoken);
              http.send();
            }, 10000);
          }
        }
        var apitoken = '{{Auth::user()->api_token}}';
        http.open('GET', 'http://127.0.0.1:8000/api/admin/dashboard?api_token='+apitoken);
        http.send();
  </script> --}}


@endsection
