{{ csrf_field() }}


<div>
  <label for="name">Nombre</label>
  <input type="text" name="name" id="name" value="{{ old('name',$product->name)}}"/>
</div>
<div>
  <label for="description">Descripción</label>
  <input type="text" name="description" id="description" value="{{ old('description',$product->name)}}"/>
</div>
<div class="">
  <label for="id_product_type">Categoría de Producto</label>
  <select class="form-control" id="id_product_type" name="id_product_type" >
    @foreach ($sellableTypes as $sellableType)
      <option
      @if($product->type!=null&&$product->id==$product->type->id)
        selected
      @endif
       value="{{ $sellableType->id }} ">
        {{ $sellableType->name }}
      </option>
    @endforeach
  </select>
</div>
<div class="">
  <label for="ingredients">Ingredientes</label>
    <select class="form-control select2" multiple="multiple" data-placeholder="Seleccioná uno/s producto/s"
            style="width: 100%;" id="ingredients[]" name="ingredients[]">
      @php
        $arrayID = $product->ingredients->pluck('id')->toArray()
      @endphp
      @foreach ($ingredients as $ingredient)
        <option
        @if(in_array($ingredient->id, old('ingredients',$arrayID)))
          selected="selected"
        @endif
         value="{{ $ingredient->id }} ">
          {{ $ingredient->name }}
        </option>
      @endforeach
    </select>

</div>
