@extends('layouts.app')

@section('title')
  Paises
@endsection

@section('breadcrumb-items')
  <li><a href="{!! route('countries-show') !!}"><i class="fa "></i> Paises</a></li>
  <li class="active"> Nuevo País</li>
@endsection

@section('content')
  <div class="panel-body">
      @include('errors.errors')

      <form  method="POST" name='newCountry'>
          {{ method_field('post') }}
        @include('countries._fields')
          <input type="submit" value="Agregar país" name="submit"/>
      </form>

  </div>
@endsection
