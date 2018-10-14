@extends('layouts.app')

@section('title')
  Ciudades
@endsection

@section('breadcrumb-items')
  <li><a href="{!! route('country-show') !!}"><i class="fa "></i> Paises</a></li>
  <li><a href="{!! route('province-show') !!}"><i class="fa "></i> Provincias</a></li>
  <li class="active">Ciudades</li>
@endsection


@section('content')
  <a class="float-right btn btn-success btn-lg" href="/admin/ciudades/agregar">Nueva</a>
  <br><br>
  @include('cities.datatable')

@endsection
