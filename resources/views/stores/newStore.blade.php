@extends('layouts.app')

@section('title')
Tiendas
@endsection

@section('breadcrumb-items')
  <li><a href="{!! route('country-show') !!}"><i class="fa "></i> Paises</a></li>
  <li><a href="{!! route('province-show') !!}"><i class="fa "></i> Provincias</a></li>
  <li><a href="{!! route('city-show') !!}"><i class="fa "></i> Ciudades</a></li>
  <li><a href="{!! route('store-show') !!}"><i class="fa "></i> Tienda</a></li>
@endsection

@section('content')

  <div class="panel-body">
      @include('errors.errors')
        <form  method="POST" name='editStore'>
        	{{ method_field('post') }}
          <label for="id_city">Ciudades</label>
          <select class="form-control" name="id_city">
            @foreach ($cities as $city)
              <option value="{{ $city->id }}">
                {{ $city->name }} ({{$city->province->name}}, {{$city->province->country->name}})
              </option>
            @endforeach
          </select>
          @include('stores._fields')
            <input type="submit" value="Agregar tienda" name="submit"/>
        </form>
  </div>
@endsection
