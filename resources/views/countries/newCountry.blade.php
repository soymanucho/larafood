@extends('layouts.app')

@section('title')
  Nuevo país
@endsection

@section('breadcrumb-items')
  <li><a href="{!! route('country-show') !!}"><i class="fa "></i> Paises</a></li>
  <li class="active"> Nuevo País</li>
@endsection

@section('content')
  <div class="panel-body">
      @include('errors.errors')
      <div class="box box-warning">
        <div class="box-header with-border">
          <h3 class="box-title">Crear país</h3>
        </div>
        <form id="formCountry" method="POST" name='newCountry'>
          <div class="box-body">
            {{ method_field('post') }}
            @include('countries._fields')
            <div class="box-footer">
              <a class="btn btn-danger" href="{{ URL::previous()}}">Volver</a>
              <input class="btn btn-primary" type="submit" value="Agregar país" name="submit"/>
            </div>
          </div>
        </form>
      </div>
  </div>
@endsection
<script type="text/javascript">
  window.addEventListener('load',function() {
    document.querySelector('#formCountry').addEventListener('submit',function (e) {
      var form = this;
      var inputText = form.elements[2]
      if(inputText.value==''){
        e.preventDefault();
        var inputGroup = document.querySelector('#inputCountry');
        inputGroup.setAttribute('class','form-group has-error');
        inputText.setAttribute('placeholder','Ingresá un nombre');
      }
    })



  });
</script>
