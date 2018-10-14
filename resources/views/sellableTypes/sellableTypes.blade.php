@extends('layouts.app')

@section('title')
  Categorías de productos
@endsection

@section('breadcrumb-items')

  <li><a href="{!! route('dashboard-show') !!}"><i class="fa "></i> Inicio</a></li>
  <li class="active">Categorías de producto</li>

@endsection

@section('content')

    <a class="float-right btn btn-success btn-lg" href="/admin/tiposDeProducto/agregar">Nuevo</a>
    <br><br>
    @include('sellableTypes.datatable')

@endsection
