@extends('layouts.app')

@section('title')
  Editar Pedido
@endsection

@section('breadcrumb-items')
  <li><a href="{!! route('dashboard-show') !!}"><i class="fa "></i> Inicio</a></li>
  <li><a href="{!! route('store-show') !!}"><i class="fa "></i> Tiendas</a></li>
  <li><a href="{!! route('myorder-show') !!}"><i class="fa "></i> Pedidos</a></li>

  <li class="active">Editar pedido</li>
@endsection

@section('content')
    <div class="panel-body">
      @include('errors.errors')
      <form  method="POST" name='editClient'>
      	{{ method_field('put') }}

        @include('orders._fields')
          <input type="submit" value="Guardar cambios" name="submit"/>
      </form>

    </div>


@endsection
