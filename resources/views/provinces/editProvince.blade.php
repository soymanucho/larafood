@extends('layouts.app')

@section('title')
  Editar Provincia
@endsection

@section('breadcrumb-items')
  <li><a href="{!! route('country-show') !!}"><i class="fa "></i> Paises</a></li>
  <li><a href="{!! route('province-show') !!}"><i class="fa "></i> Provincias</a></li>
  <li class="active">Editar</li>
@endsection

@section('content')
    <div class="panel-body">
      @include('errors.errors')
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
