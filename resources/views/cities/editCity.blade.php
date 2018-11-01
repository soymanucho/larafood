@extends('layouts.app')

@section('title')
  Ciudades
@endsection

@section('breadcrumb-items')
  <li><a href="{!! route('country-show') !!}"><i class="fa "></i> Paises</a></li>
  <li><a href="{!! route('province-show') !!}"><i class="fa "></i> Provincias</a></li>
  <li class="active">Ciudades</li>
@endsection

@section('content')
    <div class="panel-body">
      @include('errors.errors')
      <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Editar ciudad {{$city->name}}</h3>
            </div>
          <form  method="POST" name='editCity'>
            <div class="box-body">
            	{{ method_field('put') }}
              <div class="form-group">
                <label for="id_province">Provincia</label>
                <select class="form-control" name="id_province">
                  @foreach ($provinces as $province)
                    <option value="{{ $province->id }}"
                        @if($province->id == old('id_province', $city->province->id))
                          selected
                        @endif
                        >{{ $province->name }} ({{$province->country->name}})
                    </option>
                  @endforeach
                </select>
              </div>
              @include('cities._fields')
              <div class="box-footer">
                <a class="btn btn-danger" href="{{ URL::previous()}}">Volver</a>
                <input class="btn btn-primary"type="submit" value="Guardar cambios" name="submit"/>
              </div>
            </div>
          </form>
      </div>
    </div>

@endsection
