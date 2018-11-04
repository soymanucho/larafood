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
      <div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">Nueva ingrediente</h3>
        </div>
        <form id="formIngredient" method="POST" name='newIngredient'>
          <div class="box-body">
            {{ method_field('post') }}
            @include('ingredients._fields')
            <div class="box-footer">
              <a class="btn btn-danger" href="{{ URL::previous()}}">Volver</a>
              <input class="btn btn-primary"type="submit" value="Agregar ingrediente" name="submit"/>
            </div>
          </div>
        </form>
      </div>
  </div>
@endsection
<script type="text/javascript">
  window.addEventListener('load',function() {
    document.querySelector('#formIngredient').addEventListener('submit',function (e) {
      var form = this;
      var inputText = form.elements[2]
      if(inputText.value==''){
        e.preventDefault();
        var inputGroup = document.querySelector('#inputName');
        inputGroup.setAttribute('class','form-group has-error');
        inputText.setAttribute('placeholder','Falta el nombre!');
      }
    })



  });
</script>
