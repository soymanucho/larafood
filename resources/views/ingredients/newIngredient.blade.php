@extends('layouts.app')

@section('title')
  Nuevo Ingrediente
@endsection

@section('breadcrumb-items')
  <li><a href="{!! route('sellable-show') !!}"><i class="fa "></i> Productos</a></li>
  <li class="active"> Nuevo Ingrediente</li>
@endsection

@section('content')
  <div class="panel-body">
      @include('errors.errors')

        <form  method="POST" name='newIngredient'>
            {{ method_field('post') }}
          @include('ingredients._fields')
            <input type="submit" value="Agregar Ingrediente" name="submit"/>
        </form>

  </div>
@endsection
