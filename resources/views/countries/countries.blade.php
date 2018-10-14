@extends('layouts.app')

@section('title')
  Paises
@endsection

@section('breadcrumb-items')
  <li class="active"> Paises</li>
@endsection

@section('content')
  <a class="float-right btn btn-success btn-lg" href="/admin/paises/agregar">Nuevo</a>

  <br><br>

  @include('countries.datatable')

@endsection
