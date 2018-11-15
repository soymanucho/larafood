
<style media="screen">

.ingredientImg{
  transition:  0.5s;
}

.ingredientImg:hover{
  transition:  0.5s;
  transform: scale(3);
}

  .addItem{
      transition:  3s;
  }

  .addItem:hover {
    color: green;
    font-size: 35px;
    transform: rotate(180deg);
    transition:  0.5s;
    transition-timing-function: ease-in-out;
}
</style>

@extends('layouts.frontapp')

@section('title')
  {{ config('app.name', 'LaraFood') }}
@endsection

@section('content')
  <div style="background-color: red; background-image: url('front/img/top-banner.jpg'); height:65px; background-size: cover;
  background-repeat: no-repeat;"></div>
<div class="container-fluid">

  <div class="row">
    <div class="col-9">
      <section class="menu-area section-gap" id="menu">
          <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-8">
              <div class="title text-center">
                <h1 class="mb-10">Qué tipo de productos servimos?</h1>
                <p>Aquellos que son extremadamente amigos del medioambiente.</p>
              </div>
            </div>
          </div>

              <ul class="filter-wrap filters col-lg-12 no-padding">
                  <li class="active" data-filter="*">All Menu</li>
                  @foreach ($sellableTypes as $key => $sellableType)
                    <li data-filter=".{{$sellableType->name}}">{{$sellableType->name}}</li>
                  @endforeach
              </ul>

              <div class="filters-content">
                  <div class="row grid">
                    @foreach ($sellables as $key => $sellable)
                      <div class="col-md-6 all {{$sellable->type->name}}">
                        <div class="single-menu">
                          <div class="title-wrap d-flex justify-content-between">
                            <h4>{{$sellable->name}}</h4>
                            <h4 class="price">${{$sellable->pivot->price}}</h4>
                          </div>
                          <p>
                            {{$sellable->description}}
                          </p>
                          @foreach ($sellable->products as $key => $product)
                            @if ($sellable->type->name!='Promo')
                              @foreach ($product->ingredients as $key => $ingredient)
                                <img class="ingredientImg" src="/assets/images/ingredients/{{$ingredient->image}}" title="{{$ingredient->name}}" style='height: 30px; width:30px'>
                              @endforeach
                            @endif
                            <hr>
                          @endforeach
                          <div data-price='{{$sellable->pivot->price}}' data-name="{{$sellable->name}}" data-id='{{$sellable->id}}' ${{$sellable->pivot->price}}" class="pull-right add-product" ><i class="fa fa-2x fa-plus-circle addItem"></i></div>
                        </div>
                      </div>
                    @endforeach
                  </div>
              </div>

          </div>
      </section>
    </div>
    <div style="background-color:pink;" class="col-3" style="height:100vh; width:100vw" >
      <div class="position-fixed mb-1 pb-1" style="width:100vw;">
        <h1 class="text-white">Tu pedido</h1>
        <form class="form" action="{!! route('front-order-save') !!}" method="post">
          <input type="text" hidden name="id_store" value="{{$store->id}}">
          {{ csrf_field() }}
          <select class="selector" hidden multiple id="products[]" name="products[]" name="products[]">

          </select>
          <div class="input-group pre-scrollable" >
            <ul class="product-container" >

            </ul>
          </div>
          <div class="shopping-cart-footer row">
            <h2 id="subtotal" class="ml-2 mt-1"style="color:white">Subtotal:</h2>
          </div>
          <input class="btn btn-success ml-2 mt-1" type="submit" name="" value="Comprar">
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

<script type="text/javascript">
  // var container =  document.getElementById("selectedProductContainer");
  // var selector =  document.getElementById("selectorProducts");
  var price = 0;

  function productRemove(e) {
    var subtotal = document.querySelector('#subtotal');
    price = price - parseInt(e.parentElement.getAttribute('data-price'));
    e.parentNode.remove()
    subtotal.innerHTML = "Subtotal: $"+price+""
  }

  function selectGenerate(e) {
    if(price>0){
        var products = document.querySelectorAll('.productCart');
        for(product of products){
            var idProducto = product.getAttribute('data-id');
            // console.log(idProducto);
            var counter= document.querySelector('.count_'+idProducto);
          if (counter) {
            counter.setAttribute('value',parseInt(counter.getAttribute('value'))+1) ;
          }
          else {

            var inputProduct = document.createElement('option');
            var inputNumber = document.createElement('input');
            inputProduct.setAttribute('type','hidden');
            inputNumber.setAttribute('type','hidden number');
            inputNumber.setAttribute('name','count_'+idProducto);
            inputNumber.setAttribute('class','count_'+idProducto);
            inputNumber.setAttribute('value',1);
            inputProduct.setAttribute('class','productInputSelected');
            inputProduct.setAttribute('selected','true');
            inputProduct.setAttribute('value',idProducto);
            document.getElementsByClassName('selector')[0].appendChild(inputProduct)
            document.getElementsByClassName('selector')[0].appendChild(inputNumber)
          }


        }
    }else {
      e.preventDefault();
    }
  }




  window.onload = function () {

    var productContainer = document.getElementsByClassName('product-container');
    var subtotal = document.querySelector('#subtotal');
    var anchors = document.getElementsByClassName("add-product");
    for(element of anchors){
      element.addEventListener('click',function (e) {
        var nameProduct = this.getAttribute('data-name');
        var liProduct = document.createElement('li');
        var priceProduct = this.getAttribute('data-price')
        var productID = this.getAttribute('data-id')
        liProduct.setAttribute('class','productCart rounded text-center p-2 mt-1');
        liProduct.setAttribute('style','background-color:white; color:red;');


        liProduct.setAttribute('data-id', productID);
        liProduct.setAttribute('data-price', priceProduct);
        liProduct.innerHTML= nameProduct+" $"+priceProduct+" <a onclick='productRemove(this)'><i class='fa fa-lg fa-times-circle'></i></a>";
        productContainer[0].appendChild(liProduct);

        price += parseInt(priceProduct);

        subtotal.innerHTML = "Subtotal: $"+price+""
        document.getElementsByClassName('shopping-cart-footer')[0].appendChild(subtotal)
        e.preventDefault();











      })
    }


    document.getElementsByClassName('form')[0].addEventListener('submit',selectGenerate);











  }



  // var selectAProduct = function() {
  //   var selectedProduct = document.createElement("div");
  //   selectedProduct.style.background="grey";
  //   var node = document.createTextNode(selector.options[selector.selectedIndex].innerHTML);
  //   var counter = document.createElement("INPUT");
  //
  //   var check = document.createElement("INPUT");
  //   check.setAttribute("type", "checkbox");
  //   check.setAttribute("name", "products[]");
  //   check.setAttribute("checked", "checked");
  //   check.setAttribute("value", selector.value);
  //
  //
  //   counter.setAttribute("type", "number");
  //   counter.setAttribute("value", "1");
  //   counter.setAttribute("name", "counter_"+selector.value);
  //
  //   selectedProduct.appendChild(check);
  //   selectedProduct.appendChild(node);
  //   selectedProduct.appendChild(counter);
  //   selector.removeChild(selector.options[selector.selectedIndex]);
  //   container.appendChild(selectedProduct);
  // }


  // selector.addEventListener("change", selectAProduct);
</script>
