@extends('layouts.app')

@section('title')
  Editar País
@endsection

@section('breadcrumb-items')
  <li><a href="{!! route('countries-show') !!}"><i class="fa "></i> Paises</a></li>
  <li class="active"> Editar País</li>
@endsection

@section('content')
  <div class="panel-body">
      @include('errors.errors')
      <form  method="POST" name='editCountry'>
          {{ method_field('put') }}
        @include('countries._fields')
          <input type="submit" value="Guardar cambios" name="submit"/>
      </form>
  </div>
@endsection
