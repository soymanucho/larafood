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
          <form  method="POST" name='editCity'>
          	{{ method_field('put') }}
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
            @include('cities._fields')
              <input type="submit" value="Guardar cambios" name="submit"/>
          </form>
    </div>
@endsection
