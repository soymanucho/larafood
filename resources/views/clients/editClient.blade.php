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
      @include('errors.errors')
      <form  method="POST" name='editClient'>
        {{ method_field('put') }}
        @include('clients._fields')
        <label for="id_user">Usuario (opcional):</label>
        <select class="form-control" name="id_user" @if ($client->user)
          value="{{ old('id_user',$client->user->id)}}"
        @endif >
          <option value={{null}}>
            No asociar a ningún usuario.
          </option>
          @foreach ($users as $user)
            <option value="{{ $user->id }}"
              @if ($client->user) {{--duda--}}
                @if($user->id == old('id_user', $client->user->id))
                  selected
                @endif
              @endif
                >{{ $user->name }} ({{$user->email}}, {{$user->rol->name}})
            </option>
          @endforeach
        </select>
        <br>
        <input type="submit" value="Guardar cambios" name="submit"/>
      </form>
  </div>

@endsection
