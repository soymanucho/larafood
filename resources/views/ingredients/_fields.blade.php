{{ csrf_field() }}


<div class="form-group" id="inputName">
  <label for="name">Nombre: </label>
  <input type="text" name="name" id="name" value="{{ old('name',$ingredient->name)}}"/>
</div>
