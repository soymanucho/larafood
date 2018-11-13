@extends('layouts.app')

@section('title')
  Nuevo ítem
@endsection

@section('breadcrumb-items')
  <li><a href="{!! route('dashboard-show') !!}"><i class="fa "></i> Inicio</a></li>
  <li><a href="{!! route('product-show') !!}"><i class="fa "></i> Ítems</a></li>
  <li class="active">Nuevo</li>
@endsection

@section('content')
  <div class="panel-body">
    @include('errors.errors')
    <div class="box box-success">
      <div class="box-header with-border">
        <h3 class="box-title">Agregando nuevo ítem</h3>
      </div>
      <form  method="POST" name='newProduct'>
        <div class="box-body">
      	  {{ method_field('post') }}
          @include('products._fields')
          <div class="box-footer">
            <a class="btn btn-danger" href="{{ URL::previous()}}">Volver</a>
            <input class="btn btn-primary"type="submit" value="Agregar producto" name="submit"/>
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection
