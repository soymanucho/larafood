@extends('layouts.app')

@section('title')
Editar Tipo de Producto
@endsection

@section('breadcrumb-items')
  <li><a href="{!! route('sellabletype-show') !!}"><i class="fa "></i> Tipo de productos</a></li>

  <li class="active">Editar</li>
@endsection

@section('content')
    <div class="panel-body">
      @include('errors.errors')

                      <form  method="POST" name='editSellableType'>
                        	{{ method_field('put') }}
                        @include('sellableTypes._fields')
                          <input type="submit" value="Guardar cambios" name="submit"/>
                      </form>

                    </div>
                  </div>
                </div>
              </div>
            </div>

@endsection
