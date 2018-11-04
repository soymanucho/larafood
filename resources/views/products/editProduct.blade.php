@extends('layouts.app')

@section('title')
  Editar ítem
@endsection

@section('breadcrumb-items')
  <li><a href="{!! route('dashboard-show') !!}"><i class="fa "></i> Inicio</a></li>
  <li><a href="{!! route('product-show') !!}"><i class="fa "></i> Ítems</a></li>
  <li class="active">Editar</li>
@endsection

@section('content')
    <div class="panel-body">
      @include('errors.errors')
      <div class="box box-warning">
        <div class="box-header with-border">
          <h3 class="box-title">Editando ítem {{$product->name}}</h3>
        </div>
        <form  method="POST" name='newProduct'>
          <div class="box-body">
          	{{ method_field('put') }}
            @include('products._fields')
            <div class="box-footer">
              <a class="btn btn-danger" href="{{ URL::previous()}}">Volver</a>
              <input class="btn btn-primary"type="submit" value="Guardar cambios" name="submit"/>
            </div>
          </div>
        </form>
      </div>
    </div>


@endsection
