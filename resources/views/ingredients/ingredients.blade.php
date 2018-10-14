@extends('layouts.app')

@section('title')
  Ingredientes
@endsection

@section('breadcrumb-items')
  <li><a href="{!! route('product-show') !!}"><i class="fa "></i> Productos</a></li>
  <li class="active"> Ingredientes</li>
@endsection

@section('content')
  <a class="float-right btn btn-success btn-lg" href="/admin/ingredientes/agregar">Nuevo</a>
  <br><br>
  @include('ingredients.datatable')
@endsection
