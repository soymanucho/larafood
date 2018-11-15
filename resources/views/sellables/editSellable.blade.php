@extends('layouts.app')

@section('title')
  Editar Promo
@endsection

@section('breadcrumb-items')
  <li><a href="{!! route('sellable-show') !!}"><i class="fa "></i> Promo</a></li>
  <li class="active">Editar</li>
@endsection

@section('content')
  <div class="panel-body">
    @include('errors.errors')
    <div class="box box-warning">
      <div class="box-header with-border">
        <h3 class="box-title">Editando promo <b>{{$sellable->name}}</b></h3>
      </div>
      <form  method="POST" name='editSellable'>
        <div class="box-body">
          {{ method_field('put') }}
          @include('sellables._fields')
          <div class="box-footer">
            <a class="btn btn-danger" href="{{ URL::previous()}}">Volver</a>
            <input class="btn btn-primary"type="submit" value="Guardar cambios" name="submit"/>
          </div>
        </div>
      </form>
    </div>
   </div>
@endsection
