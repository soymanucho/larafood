@extends('layouts.app')

@section('title')
  Nuevo ítem de menú
@endsection

@section('breadcrumb-items')
  <li><a href="{!! route('store-show') !!}"><i class="fa "></i> Tienda</a></li>
  <li class="active">Menu</li>
  <li class="active">nuevo</li>
@endsection

@section('content')
<div class="panel-body">
  @include('errors.errors')
  <div class="box box-success">
    <div class="box-header with-border">
      <h3 class="box-title">Agregando ítems al menú</h3>
    </div>
    <form  method="POST" name='newProduct'>
      <div class="box-body">
      	{{ method_field('put') }}
        @include('menu._fields')
        <div class="box-footer">
          <a class="btn btn-danger" href="{{ URL::previous()}}">Volver</a>
          <input class="btn btn-primary"type="submit" value="Agregar ítem" name="submit"/>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection
