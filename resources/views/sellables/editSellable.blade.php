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
            <form  method="POST" name='editSellable'>
              {{ method_field('put') }}
              @include('sellables._fields')
              <input type="submit" value="Editar vendible" name="submit"/>
            </form>
         </div>
      </div>
    </div>
  </div>
</div>

@endsection
