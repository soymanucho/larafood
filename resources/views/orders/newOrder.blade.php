@extends('layouts.app')

@section('title')
  Nuevo Pedido
@endsection

@section('breadcrumb-items')
  <li><a href="{!! route('order-show') !!}"><i class="fa "></i> Pedidos</a></li>
  <li class="active">Nuevo</li>
@endsection

@section('content')
    <div class="panel-body">
      @include('errors.errors')
        <form  method="POST" name='editOrder'>
        	{{ method_field('post') }}

          @include('orders._fields')
            <input type="submit" value="Agregar pedido" name="submit"/>
        </form>
    </div>
@endsection
