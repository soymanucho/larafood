@extends('layouts.app')

@section('title')
  Nuevo item de menu
@endsection

@section('breadcrumb-items')
  <li><a href="{!! route('store-show') !!}"><i class="fa "></i> Tienda</a></li>
  <li class="active">Menu</li>
  <li class="active">nuevo</li>
@endsection

@section('content')
    <div class="panel-body">
      @include('errors.errors')
                      <form  method="POST" name='newProduct'>
                      	{{ method_field('put') }}

                        @include('menu._fields')
                          <input type="submit" value="Agregar Item" name="submit"/>
                      </form>

                    </div>
                  </div>
                </div>
              </div>
            </div>

@endsection
