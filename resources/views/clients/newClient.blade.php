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
      @include('errors.errors')
      <form  method="POST" name='editClient'>
        {{ method_field('post') }}
        @include('clients._fields')
        <label for="id_user">Usuarios (opcional):</label>
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
        <br>
          <input type="submit" value="Agregar cliente" name="submit"/>
      </form>

  </div>

@endsection
