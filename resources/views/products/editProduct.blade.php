@extends('layouts.app')

@section('title')
  Editar ítem
@endsection

@section('breadcrumb-items')
  <li><a href="{!! route('product-show') !!}"><i class="fa "></i> Ítems</a></li>
  <li class="active">Editar</li>
@endsection

@section('content')
    <div class="panel-body">
      @include('errors.errors')
        <form  method="POST" name='newProduct'>
        	{{ method_field('put') }}
          @include('products._fields')
            <input type="submit" value="Editar producto" name="submit"/>
        </form>
    </div>


@endsection
