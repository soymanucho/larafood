@extends('layouts.app')

@section('title')
  Nueva Comida
@endsection

@section('breadcrumb-items')
  <li><a href="{!! route('product-show') !!}"><i class="fa "></i> Comida</a></li>
  <li class="active">Nueva</li>
@endsection

@section('content')
    <div class="panel-body">
      @include('errors.errors')
                      <form  method="POST" name='newProduct'>
                      	{{ method_field('post') }}

                        @include('products._fields')
                          <input type="submit" value="Agregar Producto" name="submit"/>
                      </form>

                    </div>
                  </div>
                </div>
              </div>
            </div>

@endsection
