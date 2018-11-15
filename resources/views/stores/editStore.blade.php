@extends('layouts.app')

@section('title')
  Editar Tienda
@endsection

@section('breadcrumb-items')
  <li><a href="{!! route('country-show') !!}"><i class="fa "></i> Paises</a></li>
  <li><a href="{!! route('province-show') !!}"><i class="fa "></i> Provincias</a></li>
  <li><a href="{!! route('city-show') !!}"><i class="fa "></i> Ciudades</a></li>
  <li><a href="{!! route('store-show') !!}"><i class="fa "></i> Tienda</a></li>
  <li class="active">Editar</li>
@endsection

@section('content')
    <div class="panel-body">
      @include('errors.errors')
      <div class="box box-warning">
        <div class="box-header with-border">
          <h3 class="box-title">Editando tienda <b>{{$store->name}}</b> </h3>
        </div>
        <form  method="POST" name='editStore'>
          <div class="box-body">
          	{{ method_field('put') }}
            @include('stores._fields')
            <div class="box-footer">
              <a class="btn btn-danger" href="{{ URL::previous()}}">Volver</a>
              <input class="btn btn-primary"type="submit" value="Guardar cambios" name="submit"/>
            </div>
          </div>
        </form>
      </div>
    </div>

@endsection
