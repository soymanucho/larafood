@extends('layouts.app')

@section('title')
  Nueva Ciudad
@endsection

@section('breadcrumb-items')
  <li><a href="{!! route('country-show') !!}"><i class="fa "></i> Paises</a></li>
  <li><a href="{!! route('province-show') !!}"><i class="fa "></i> Provincias</a></li>
  <li><a href="{!! route('city-show') !!}"><i class="fa "></i> Ciudades</a></li>
  <li class="active">Nueva Ciudad</li>
@endsection

@section('content')
    <div class="panel-body">
      @include('errors.errors')
      <div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">Nueva ciudad</h3>
        </div>
        <form  method="POST" name='editCity'>
          <div class="box-body">
            {{ method_field('post') }}
            <div class="form-group">
              <label for="id_province">Provincia</label>
              <select class="form-control" name="id_province">
                @foreach ($provinces as $province)
                  <option value="{{ $province->id }}">
                    {{ $province->name }} ({{$province->country->name}})
                  </option>
                @endforeach
              </select>
            </div>
            @include('cities._fields')
            <div class="box-footer">
              <a class="btn btn-danger" href="{{ URL::previous()}}">Volver</a>
              <input class="btn btn-primary"type="submit" value="Agregar ciudad" name="submit"/>
            </div>
          </div>
        </form>
      </div>
    </div>
@endsection
