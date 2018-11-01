@extends('layouts.app')

@section('title')
  Editar País
@endsection

@section('breadcrumb-items')
  <li><a href="{!! route('country-show') !!}"><i class="fa "></i> Paises</a></li>
  <li class="active"> Editar País</li>
@endsection

@section('content')
  <div class="panel-body">
      @include('errors.errors')
      <div class="box box-warning">
        <div class="box-header with-border">
          <h3 class="box-title">Editar país {{$country->name}}</h3>
        </div>
        <form  method="POST" name='editCountry'>
          <div class="box-body">
            {{ method_field('put') }}
            @include('countries._fields')
            <div class="box-footer">
              <a class="btn btn-danger" href="{{ URL::previous()}}">Volver</a>
              <input class="btn btn-primary"type="submit" value="Guardar cambios" name="submit"/>
            </div>
          </div>
        </form>
      </div>
  </div>
@endsection
