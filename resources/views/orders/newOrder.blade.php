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
        <form  method="POST" name='newOrder'>
        	{{ method_field('post') }}
          @include('orders._fields')
            <input type="submit" value="Agregar pedido" name="submit"/>
        </form>
    </div>
@endsection
