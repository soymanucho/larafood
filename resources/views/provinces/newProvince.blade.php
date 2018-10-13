@extends('layouts.app')

@section('title')
  Nueva Provincia
@endsection

@section('breadcrumb-items')
  <li><a href="{!! route('country-show') !!}"><i class="fa "></i> Paises</a></li>
  <li><a href="{!! route('province-show') !!}"><i class="fa "></i> Provincias</a></li>
  <li class="active">Nueva</li>
@endsection

@section('content')
    <div class="panel-body">
      @include('errors.errors')
                      <form  method="POST" name='editProvince'>
                      	{{ method_field('post') }}
                        <label for="id_country">País</label>
                        <select class="form-control" name="id_country">
                          @foreach ($countries as $country)
                            <option value="{{ $country->id }}">
                              {{ $country->name }}
                            </option>
                          @endforeach
                        </select>
                        @include('provinces._fields')
                          <input type="submit" value="Agregar provincia" name="submit"/>
                      </form>

                    </div>
                  </div>
                </div>
              </div>
            </div>

@endsection
