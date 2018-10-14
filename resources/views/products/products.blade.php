@extends('layouts.app')

@section('title')
  Ítems
@endsection

@section('breadcrumb-items')
  <li><a href="{!! route('dashboard-show') !!}"><i class="fa "></i> Inicio</a></li>
  <li class="active">Ítems</li>
@endsection

@section('content')

  <a class="float-right btn btn-success btn-lg" href="/admin/productos/agregar">Nuevo</a>
  <br><br>
  @include('products.datatable')

@endsection
