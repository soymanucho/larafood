@extends('layouts.app')

@section('title')
  Pedidos de la tienda {{$store->name}}
@endsection

@section('breadcrumb-items')
  <li><a href="{!! route('dashboard-show') !!}"><i class="fa "></i> Inicio</a></li>
  <li><a href="{!! route('store-show') !!}"><i class="fa "></i> Tiendas</a></li>

  <li class="active">Pedidos</li>
@endsection

@section('content')
  <a class="float-right btn btn-success btn-lg" href="/admin/tiendas/{{Auth::user()->store->id}}/pedido/agregar">Nuevo Pedido</a>
  <br><br>
  @include('orders.datatable')

@endsection
