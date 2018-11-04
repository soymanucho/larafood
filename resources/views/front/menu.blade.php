@extends('layouts.frontapp')

@section('title')
  {{ config('app.name', 'LaraFood') }}
@endsection

@section('content')
  <div style="background-color: red; background-image: url('front/img/top-banner.jpg'); height:200px; background-size: cover;
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
                                <img src="/assets/images/ingredients/{{$ingredient->image}}" title="{{$ingredient->name}}" style='height: 30px; width:30px'>
                              @endforeach
                            @endif
                            <hr>
                          @endforeach
                          <div data-price='{{$sellable->pivot->price}}' id="{{$sellable->name}} ${{$sellable->pivot->price}}" class="pull-right add-product" ><i class="fa fa-2x fa-plus-circle"></i></div>
                        </div>
                      </div>
                    @endforeach
                  </div>
              </div>

          </div>
      </section>
    </div>
    <div style="background-color:pink;" class="col-3">
      <div class="position-fixed mb-4 pb-4">
        <h1 class="text-white">Tu pedido</h1>
        <form class="form" action="" method="post">
          <div class="input-group">
            <ul class="product-container">

            </ul>
          </div>
          <div class="shopping-cart-footer">

          </div>
          <input class="btn btn-success" type="submit" name="" value="Comprar">
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

<script type="text/javascript">
  // var container =  document.getElementById("selectedProductContainer");
  // var selector =  document.getElementById("selectorProducts");
  window.onload = function () {

    var productContainer = document.getElementsByClassName('product-container');
    var subtotal = document.createElement('h2');
    var price = 0;

    var anchors = document.getElementsByClassName("add-product");
    for(element of anchors){
      element.addEventListener('click',function (e) {
        var nameProduct = this.id;
        var liProduct = document.createElement('li');
        var priceProduct = this.getAttribute('data-price')
        liProduct.setAttribute('class','rounded text-center p-2 mt-1');
        liProduct.setAttribute('style','background-color:red; color:white;');
        liProduct.innerHTML= nameProduct+" <a onclick='this.parentNode.remove()'><i class='fa fa-lg fa-times-circle'></i></a>";
        productContainer[0].appendChild(liProduct);
        
        price += parseInt(priceProduct);

        subtotal.innerHTML = "<h2>Subtotal: $"+price+"</h2>"
        document.getElementsByClassName('shopping-cart-footer')[0].appendChild(subtotal)
        e.preventDefault();
      })
    }

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
