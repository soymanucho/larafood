@extends('layouts.app')

@section('title')
  Promociones
@endsection

@section('breadcrumb-items')
  <li><a href="{!! route('dashboard-show') !!}"><i class="fa "></i> Inicio</a></li>
  <li class="active">Promos</li>
@endsection

@section('content')

    <a class="float-right btn btn-success btn-lg" href="{{route('sellable-new')}}">Nueva</a>
    <br><br>
    @include('sellables.datatable')

@endsection
