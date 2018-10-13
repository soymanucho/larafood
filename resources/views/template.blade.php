@extends('layouts.app')

@section('title')
  Editar Ingrediente
@endsection

@section('breadcrumb-items')
  <li><a href="{!! route('sellable-show') !!}"><i class="fa "></i> Productos</a></li>
  <li class="active"> Editar Ingrediente</li>
@endsection

@section('content')
  <div class="panel-body">
      @include('errors.errors')

  </div>
@endsection