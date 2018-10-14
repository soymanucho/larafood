@extends('layouts.app')

@section('title')
  Editar Ingrediente
@endsection

@section('breadcrumb-items')
  <li><a href="{!! route('sellable-show') !!}"><i class="fa "></i> Productos</a></li>
  <li class="active"> Editar Ingrediente</li>
@endsection

@section('content')
  {{-- OPCION 1 PARA NEW/EDIT ALGO
  <div class="panel-body">
      @include('errors.errors')

  </div>
  OPCION 2 PARA DATATABLES ALGO
  <a class="float-right btn btn-primary btn-lg" href="/admin/tiendas/agregar">Nueva tienda</a>
  <br><br>
  @include('stores.datatable')
   --}}
@endsection
