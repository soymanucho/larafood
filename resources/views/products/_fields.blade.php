{{ csrf_field() }}


<div>
  <label for="name">Nombre</label>
  <input type="text" name="name" id="name" value="{{ old('name',$product->name)}}"/>
</div>
<div>
  <label for="description">Description</label>
  <input type="text" name="description" id="description" value="{{ old('description',$product->name)}}"/>
</div>
<div>
  <label for="price">Price</label>
  <input type="text" name="price" id="price" value="{{ old('price',$product->price)}}"/>
</div>

<label for="id_product_type">Tipo de Producto</label>
<select class="form-control" name="id_product_type">
  @foreach ($productTypes as $productType)
    <option value="{{ $productType->id }}">
      {{ $productType->name }}
    </option>
  @endforeach

</select>

  <label for="ingredients">Ingredients</label>
  <select multiple class="form-control" name="ingredients" >
    @foreach ($ingredients as $ingredient)
      <option value="{{ $ingredient->id }}">
        {{ $ingredient->name }}
      </option>
    @endforeach
  </select>

  <label for="products">Productos</label>
  <select multiple class="form-control" name="products" >
    @foreach ($products as $product)
      <option value="{{ $product->id }}">
        {{ $product->name }}
      </option>
    @endforeach
  </select>
