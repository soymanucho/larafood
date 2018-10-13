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
            <form  method="POST" name='newSellable'>
              {{ method_field('post') }}
              @include('sellables._fields')
              <input type="submit" value="Nuevo vendible" name="submit"/>
            </form>
         </div>
      </div>
    </div>
  </div>
</div>

@endsection
