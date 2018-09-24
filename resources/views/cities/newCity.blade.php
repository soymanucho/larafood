@extends('layouts.app')



@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Ciudades</div>

                <div class="panel-body">
                    <div class="errores">
                      <ul>
                        @foreach($errors->all() as $error)
                        <li class="error">{{ $error }}</li>
                        @endforeach
                      </ul>

                    </div>
                      <form  method="POST" name='editCity'>
                      	{{ method_field('post') }}
                        <label for="id_province">Provincia</label>
                        <select class="form-control" name="id_province">
                          @foreach ($provinces as $province)
                            <option value="{{ $province->id }}">
                              {{ $province->name }} ({{$province->country->name}})
                            </option>
                          @endforeach
                        </select>
                        @include('cities._fields')
                          <input type="submit" value="Agregar ciudad" name="submit"/>
                      </form>

                    </div>
                  </div>
                </div>
              </div>
            </div>

@endsection
