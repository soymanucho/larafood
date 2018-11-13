@extends('layouts.app')

@section('title')
  Nueva Provincia
@endsection

@section('breadcrumb-items')
  <li><a href="{!! route('country-show') !!}"><i class="fa "></i> Paises</a></li>
  <li><a href="{!! route('province-show') !!}"><i class="fa "></i> Provincias</a></li>
  <li class="active">Nueva</li>
@endsection

@section('content')
    <div class="panel-body">
      @include('errors.errors')
      <div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">Agregando nueva provincia</h3>
        </div>
        <form  method="POST" name='editProvince'>
          <div class="box-body">
          	{{ method_field('post') }}
            <div class="form-group">
              <label for="id_country">País</label>
              <select class="form-control" name="id_country">
                @foreach ($countries as $country)
                  <option value="{{ $country->id }}">
                    {{ $country->name }}
                  </option>
                @endforeach
              </select>
            </div>
            @include('provinces._fields')
            <div class="box-footer">
              <a class="btn btn-danger" href="{{ URL::previous()}}">Volver</a>
              <input class="btn btn-primary"type="submit" value="Agregar provincia" name="submit"/>
            </div>
          </div>
        </form>
      </div>
    </div>
@endsection
