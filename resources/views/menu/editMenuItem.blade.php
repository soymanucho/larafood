@extends('layouts.app')

@section('title')
Editar ítem de menu
@endsection

@section('breadcrumb-items')
  <li><a href="{!! route('store-show') !!}"><i class="fa "></i> Tienda</a></li>
  <li class="active">Menu</li>
  <li class="active">Editar</li>
@endsection

@section('content')
<div class="panel-body">
  @include('errors.errors')
  <div class="box box-warning">
    <div class="box-header with-border">
      <h3 class="box-title">Editando menu</h3>
    </div>
    <form  method="POST" name='editMenuItem'>
      <div class="box-body">
      	{{ method_field('post') }}
        @include('menu._fields')
        <div class="box-footer">
          <a class="btn btn-danger" href="{{ URL::previous()}}">Volver</a>
          <input class="btn btn-primary"type="submit" value="Guardar cambios" name="submit"/>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection
