@extends('layouts.app')



@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Provincias</div>

                <div class="panel-body">
                    <div class="errores">
                      <ul>
                        @foreach($errors->all() as $error)
                        <li class="error">{{ $error }}</li>
                        @endforeach
                      </ul>

                    </div>
                      <form  method="POST" name='editProvince'>
                      	{{ method_field('put') }}
                        <label for="id_country">País</label>
                        <select class="form-control" name="id_country">
                          @foreach ($countries as $country)
                            <option value="{{ $country->id }}"
                                @if($country->id == old('id_country', $province->country->id))
                                  selected
                                @endif
                                >{{ $country->name }}
                            </option>
                          @endforeach
                        </select>
                        @include('provinces._fields')
                          <input type="submit" value="Guardar cambios" name="submit"/>
                      </form>

                    </div>
                  </div>
                </div>
              </div>
            </div>

@endsection
