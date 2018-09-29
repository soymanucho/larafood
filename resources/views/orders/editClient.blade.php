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
                        <label for="id_user">Usuario:</label>
                        <select class="form-control" name="id_user">
                          @foreach ($users as $user)
                            <option value="{{ $user->id }}"
                                @if($user->id == old('id_user', $client->user->id))
                                  selected
                                @endif
                                >{{ $user->name }} ({{$user->email}}, {{$user->rol->name}})
                            </option>
                          @endforeach
                        </select>
                        @include('clients._fields')
                          <input type="submit" value="Guardar cambios" name="submit"/>
                      </form>

                    </div>
                  </div>
                </div>
              </div>
            </div>

@endsection