@extends('layouts.app')

@section('title')
  Clientes
@endsection

@section('breadcrumb-items')
  <li><a href="{!! route('store-show') !!}"><i class="fa "></i> Tiendas</a></li>
  <li class="active">Clientes</li>
@endsection

@section('content')
  <a class="float-right btn btn-success btn-lg" href="/admin/clientes/agregar">Nuevo</a>
  <br><br>

  @include('clients.datatable')

@endsection
