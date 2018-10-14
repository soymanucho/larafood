@extends('layouts.app')

@section('title')
  Provincias
@endsection

@section('breadcrumb-items')
  <li><a href="{!! route('country-show') !!}"><i class="fa "></i> Paises</a></li>
  <li><a href="{!! route('province-show') !!}"><i class="fa "></i> Provincias</a></li>
@endsection

@section('content')


  <a class="float-right btn btn-success btn-lg" href="/admin/provincias/agregar">Nueva</a>
  <br><br>
  @include('provinces.datatable')
@endsection
