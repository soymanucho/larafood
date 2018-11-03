@extends('layouts.app')

@section('title')
  Nuevo Cliente
@endsection

@section('breadcrumb-items')
  <li><a href="{!! route('store-show') !!}"><i class="fa "></i> Tiendas</a></li>
  <li><a href="{!! route('client-show') !!}"><i class="fa "></i> Clientes</a></li>
  <li class="active">Nuevo Cliente</li>
@endsection

@section('content')
  <div class="panel-body">
    <div class="box box-success">
      <div class="box-header with-border">
        <h3 class="box-title">Crear cliente</h3>
      </div>
      @include('errors.errors')
      <form  method="POST" name='editClient'>
        {{ method_field('post') }}

        @include('clients._fields')
        <div class="form-group">
          <label for="id_user">Usuario (opcional):</label>
          <select class="form-control" name="id_user">
            <option value={{null}}>
              No asociar a ningún usuario.
            </option>
            @foreach ($users as $user)
              <option value="{{ $user->id }}">
                {{ $user->name }} ({{$user->email}}, {{$user->rol->name}})
              </option>
            @endforeach
          </select>
        </div>
        <div class="box-footer">
          <a class="btn btn-danger" href="{{ URL::previous()}}">Volver</a>
          <input class="btn btn-primary" type="submit" value="Agregar cliente" name="submit"/>
        </div>
      </form>
    </div>
  </div>

@endsection
