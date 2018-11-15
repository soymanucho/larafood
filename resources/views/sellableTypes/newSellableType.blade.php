@extends('layouts.app')

@section('title')
Nuevo Tipo de Producto
@endsection

@section('breadcrumb-items')
  <li><a href="{!! route('dashboard-show') !!}"><i class="fa "></i> Inicio</a></li>
  <li><a href="{!! route('sellabletype-show') !!}"><i class="fa "></i> Tipo de productos</a></li>

  <li class="active">Nuevo</li>
@endsection

@section('content')
    <div class="panel-body">
      @include('errors.errors')
      <div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">Nueva ciudad</h3>
        </div>
        <form  method="POST" name='newSellableType'>
          <div class="box-body">
          	{{ method_field('post') }}
            @include('sellableTypes._fields')
            <div class="box-footer">
              <a class="btn btn-danger" href="{{ URL::previous()}}">Volver</a>
              <input class="btn btn-primary"type="submit" value="Agregar categoría" name="submit"/>
            </div>
          </div>
        </form>
      </div>
    </div>
@endsection
