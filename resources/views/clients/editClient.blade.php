@extends('layouts.app')

@section('title')
  Editar Cliente
@endsection

@section('breadcrumb-items')
  <li><a href="{!! route('store-show') !!}"><i class="fa "></i> Tiendas</a></li>
  <li><a href="{!! route('client-show') !!}"><i class="fa "></i> Clientes</a></li>
  <li class="active"> Editar Cliente</li>
@endsection

@section('content')
  <div class="panel-body">
    <div class="box box-warning">
      <div class="box-header with-border">
        <h3 class="box-title">Editar cliente {{$client->name}}</h3>
      </div>
      @include('errors.errors')
      <form  method="POST" name='editClient'>
        <div class="box-body">
          {{ method_field('put') }}
          @include('clients._fields')
          <div class="form-group">
            <label for="id_user">Usuario (opcional):</label>
            <select class="form-control" name="id_user" @if ($client->user)
              value="{{ old('id_user',$client->user->id)}}"
            @endif >
              <option value={{null}}>
                No asociar a ningún usuario.
              </option>
              @foreach ($users as $user)
                <option value="{{ $user->id }}"
                  @if ($client->user)
                    @if($user->id == old('id_user', $client->user->id))
                      selected
                    @endif
                  @endif
                    >{{ $user->name }} ({{$user->email}}, {{$user->rol->name}})
                </option>
              @endforeach
            </select>
          </div>
          <div class="box-footer">
            <a class="btn btn-danger" href="{{ URL::previous()}}">Volver</a>
            <input class="btn btn-primary"type="submit" value="Guardar cambios" name="submit"/>
          </div>
        </div>
      </form>
    </div>
  </div>

@endsection
