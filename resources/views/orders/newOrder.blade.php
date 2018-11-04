@extends('layouts.app')

@section('title')
  Nuevo Pedido
@endsection

@section('breadcrumb-items')
  <li><a href="{!! route('dashboard-show') !!}"><i class="fa "></i> Inicio</a></li>
  <li><a href="{!! route('store-show') !!}"><i class="fa "></i> Tiendas</a></li>
  <li><a href="{!! route('myorder-show') !!}"><i class="fa "></i> Pedidos</a></li>
  <li class="active">Nuevo pedido</li>
@endsection

@section('content')
    <div class="panel-body">
      @include('errors.errors')
      <div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">Realizando un nuevo pedido</h3>
        </div>
        <form  method="POST" name='newOrder'>
          <div class="box-body">
          	{{ method_field('post') }}
            @include('orders._fields')
            <div class="box-footer">
              <a class="btn btn-danger" href="{{ URL::previous()}}">Volver</a>
              <input class="btn btn-primary"type="submit" value="Agregar pedido" name="submit"/>
            </div>
          </div>
        </form>
      </div>
    </div>
@endsection
