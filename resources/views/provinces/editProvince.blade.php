@extends('layouts.app')

@section('title')
  Editar Provincia
@endsection

@section('breadcrumb-items')
  <li><a href="{!! route('country-show') !!}"><i class="fa "></i> Paises</a></li>
  <li><a href="{!! route('province-show') !!}"><i class="fa "></i> Provincias</a></li>
  <li class="active">Editar</li>
@endsection

@section('content')
  <div class="panel-body">
    @include('errors.errors')
    <div class="box box-warning">
      <div class="box-header with-border">
        <h3 class="box-title">Editando provincia {{$province->name}}</h3>
      </div>
      <form  method="POST" name='editProvince'>
        <div class="box-body">
        	{{ method_field('put') }}
          <div class="form-group">
            <label for="id_country">País</label>
            <select class="form-control" name="id_country">
              @foreach ($countries as $country)
                <option value="{{ $country->id }}"
                    @if($country->id == old('id_country', $province->country->id))
                      selected
                    @endif
                    >{{ $country->name }}
                </option>
              @endforeach
            </select>
          </div>
          @include('provinces._fields')
          <div class="box-footer">
            <a class="btn btn-danger" href="{{ URL::previous()}}">Volver</a>
            <input class="btn btn-primary"type="submit" value="Guardar cambios" name="submit"/>
          </div>
        </div>
      </form>
    </div>
  </div>

@endsection
