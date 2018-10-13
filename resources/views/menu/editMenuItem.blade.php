@extends('layouts.app')

@section('title')
Editar item de menu
@endsection

@section('breadcrumb-items')
  <li><a href="{!! route('store-show') !!}"><i class="fa "></i> Tienda</a></li>
  <li class="active">Menu</li>
  <li class="active">Editar</li>
@endsection

@section('content')
    <div class="panel-body">
      @include('errors.errors')
                      <form  method="POST" name='editMenuItem'>
                      	{{ method_field('post') }}

                        @include('menu._fields')
                          <input type="submit" value="Edit Item" name="submit"/>
                      </form>

                    </div>
                  </div>
                </div>
              </div>
            </div>

@endsection
