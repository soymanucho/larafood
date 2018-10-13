@extends('layouts.app')

@section('title')
Nuevo Tipo de Producto
@endsection

@section('breadcrumb-items')
  <li><a href="{!! route('sellabletype-show') !!}"><i class="fa "></i> Tipo de productos</a></li>

  <li class="active">Nuevo</li>
@endsection

@section('content')
    <div class="panel-body">
      @include('errors.errors')

                      <form  method="POST" name='newSellableType'>
                        	{{ method_field('post') }}
                        @include('sellableTypes._fields')
                          <input type="submit" value="Agregar tipo de P." name="submit"/>
                      </form>

                    </div>
                  </div>
                </div>
              </div>
            </div>

@endsection
