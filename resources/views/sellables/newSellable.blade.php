@extends('layouts.app')

@section('title')
  Nueva Promo
@endsection

@section('breadcrumb-items')
  <li><a href="{!! route('sellable-show') !!}"><i class="fa "></i> Promo</a></li>
  <li class="active">Nueva</li>
@endsection

@section('content')
  <div class="panel-body">
    @include('errors.errors')
    <div class="box box-success">
      <div class="box-header with-border">
        <h3 class="box-title">Nueva promo</h3>
      </div>
          <form  method="POST" name='newSellable'>
            <div class="box-body">
              {{ method_field('post') }}
              @include('sellables._fields')
              <div class="box-footer">
                <a class="btn btn-danger" href="{{ URL::previous()}}">Volver</a>
                <input class="btn btn-primary"type="submit" value="Agregar promo" name="submit"/>
              </div>
            </div>
          </form>
     </div>
  </div>
@endsection
