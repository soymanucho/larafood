@extends('layouts.app')



@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Editar Cliente</div>

                <div class="panel-body">
                    <div class="errores">
                      <ul>
                        @foreach($errors->all() as $error)
                        <li class="error">{{ $error }}</li>
                        @endforeach
                      </ul>

                    </div>
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
                  </div>
                </div>
              </div>
            </div>

@endsection
