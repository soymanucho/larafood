@extends('layouts.app')



@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">
          Vendible
        </div>
        <div class="panel-body">
           <div class="errores">
            <ul>
              @foreach($errors->all() as $error)
                <li class="error">{{ $error }}</li>
              @endforeach
            </ul>
           </div>
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
