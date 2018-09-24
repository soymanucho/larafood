@extends('layouts.app')



@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tiendas</div>

                <div class="panel-body">
                    <div class="errores">
                      <ul>
                        @foreach($errors->all() as $error)
                        <li class="error">{{ $error }}</li>
                        @endforeach
                      </ul>

                    </div>
                      <form  method="POST" name='editStore'>
                      	{{ method_field('put') }}
                        <label for="id_city">Ciudades</label>
                        <select class="form-control" name="id_city">
                          @foreach ($cities as $city)
                            <option value="{{ $city->id }}"
                                @if($city->id == old('id_city', $store->city->id))
                                  selected
                                @endif
                                >{{ $city->name }} ({{$city->province->name}}, {{$city->province->country->name}})
                            </option>
                          @endforeach
                        </select>
                        @include('stores._fields')
                          <input type="submit" value="Guardar cambios" name="submit"/>
                      </form>

                    </div>
                  </div>
                </div>
              </div>
            </div>

@endsection
