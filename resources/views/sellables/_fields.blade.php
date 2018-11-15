{{ csrf_field() }}


<div class="form-group">
  <label for="name">Nombre</label>
  <input type="text" name="name" id="name" value="{{ old('name',$sellable->name)}}"/>
</div>

<div class="form-group">
  <label for="description">Description</label>
  <input type="text" name="description" id="description" value="{{ old('description',$sellable->description)}}"/>
</div>

<div class="form-group">
  <label for="id_sellable_type">Tipos de Producto</label>
  <select class="form-control" id="id_sellable_type" name="id_sellable_type" >
    @foreach ($sellableTypes as $sellableType)
      <option
      @if($sellable->type!=null&&$sellableType->id==$sellable->type->id)
        selected
      @endif
       value="{{ $sellableType->id }} ">
        {{ $sellableType->name }}
      </option>
    @endforeach
  </select>
</div>

<div class="form-group">
  <label for="products[]">Productos</label>
  <select multiple id="selectorProducts" class="form-control" id="products[]" name="products[]" >
    @foreach ($products as $product)
      <option
      @if(in_array($product->id, $sellable->products->pluck('id')->toArray()))
        selected
      @endif
       value="{{ $product->id }}">
        {{ $product->name }}
      </option>
    @endforeach
  </select>
</div>
<div class="form-group" id="selectedProductContainer">

</div>


<script type="text/javascript">
  var container =  document.getElementById("selectedProductContainer");
  var selector =  document.getElementById("selectorProducts");



  var selectAProduct = function() {
    var selectedProduct = document.createElement("div");
    selectedProduct.style.background="#dce5e6";
    var node = document.createTextNode(selector.options[selector.selectedIndex].innerHTML);
    var counter = document.createElement("INPUT");

    var check = document.createElement("INPUT");
    check.setAttribute("type", "checkbox");
    check.setAttribute("name", "products[]");
    check.setAttribute("checked", "checked");
    check.setAttribute("value", selector.value);



    counter.setAttribute("type", "number");
    counter.setAttribute("class","pull-right mt-4 pt-4 mb-4 pb-4")
    counter.setAttribute("value", "1");
    counter.setAttribute("name", "counter_"+selector.value);

    selectedProduct.appendChild(check);
    selectedProduct.appendChild(node);
    selectedProduct.appendChild(counter);
    selector.removeChild(selector.options[selector.selectedIndex]);
    container.appendChild(selectedProduct);
  }


  selector.addEventListener("change", selectAProduct);
</script>
