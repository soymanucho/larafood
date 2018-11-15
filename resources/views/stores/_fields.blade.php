{{ csrf_field() }}

<script type="text/javascript">
   var data = <?php echo json_encode($countries, JSON_HEX_TAG); ?>;

   var editCityID = <?php try{echo json_encode(old('id_city',$store->city->id), JSON_HEX_TAG);}catch(Exception $e){echo 'a';} ?>;
   var editCountryID = <?php try{echo json_encode(old('id_country',$store->city->province->country->id), JSON_HEX_TAG);}catch(Exception $e){ echo 'a';} ?>;
   var editProvinceID = <?php try{echo json_encode(old('id_province',$store->city->province->id), JSON_HEX_TAG);}catch(Exception $e){echo 'a';} ?>;

   // console.log(editCountryID);
   // console.log(editProvinceID);

</script>


<div class="selectCountry form-group">
  <label for="id_country">País</label>
  <select class="form-control" name="id_country">
    <option value="" selected disabled>
      Elegir un país
    </option>
   @foreach ($countries as $country)
     <option value="{{ $country->id }}">
       {{ $country->name }}
     </option>
   @endforeach
  </select>
</div>

<div class="form-group" name="selectProvincesDiv" style="display:none">
  <label for="id_province">Provincia</label>
  <select class="form-control" name="id_province">

  </select>
</div>

<div class="form-group" name="selectCitiesDiv" style="display:none">
  <label for="id_city">Ciudad</label>
  <select class="form-control" name="id_city">

  </select>

</div>

<div class="form-group">
  <label for="name">Nombre</label>
  <input type="text" name="name" id="name" value="{{ old('name',$store->name)}}"/>
</div>

<div class="form-group">
  <label for="address">Dirección</label>
  <input type="text" name="address" id="address" value="{{ old('address',$store->address)}}"/>
</div>



<script type="text/javascript">

var countrySelect = document.getElementsByName("id_country")[0];
var provincesSelect = document.getElementsByName("id_province")[0];
var provincesSelectDiv = document.getElementsByName("selectProvincesDiv")[0];
var citiesSelectDiv = document.getElementsByName("selectCitiesDiv")[0];
var citiesSelect = document.getElementsByName("id_city")[0];


function countryChanged() {

  var selectedCountryId = countrySelect.options[countrySelect.selectedIndex].value;
  var selectedCountry = data.filter(ctry=> ctry.id == selectedCountryId);

  while (provincesSelect.firstChild) {
    provincesSelect.removeChild(provincesSelect.firstChild);
  }

  var placeholder = document.createElement("option");
  placeholder.value= '0';
  placeholder.innerHTML= 'Elegir una Provincia';
  placeholder.disabled= true;
  placeholder.selected= true;
  provincesSelect.appendChild(placeholder);

  selectedCountry[0].provinces.map(function(x) {
    var opt = document.createElement("option");
    opt.value= x.id;
    opt.innerHTML= x.name;
    provincesSelect.appendChild(opt);
  });

  provincesSelectDiv.style.display = "block";//Muestro el select de provincias
  citiesSelectDiv.style.display = "none";//Muestro el select de provincias
}

function provinceChanged() {

  var selectedCountryId = countrySelect.options[countrySelect.selectedIndex].value;
  var selectedCountry = data.filter(ctry=> ctry.id == selectedCountryId);
  var selectedProvinceId = provincesSelect.options[provincesSelect.selectedIndex].value;
  var selectedProvince = selectedCountry[0].provinces.filter(prov=> prov.id == selectedProvinceId)[0];
  console.log(selectedProvince.cities);
  while (citiesSelect.firstChild) {
    citiesSelect.removeChild(citiesSelect.firstChild);
  }

  var placeholder = document.createElement("option");
  placeholder.value= '0';
  placeholder.innerHTML= 'Elegir una ciudad';
  placeholder.disabled= true;
  placeholder.selected= true;
  citiesSelect.appendChild(placeholder);

  selectedProvince.cities.map(function(x) {
    var opt = document.createElement("option");
    opt.value= x.id;
    opt.innerHTML= x.name;
    citiesSelect.appendChild(opt);
  });

  citiesSelectDiv.style.display = "block";
}




  countrySelect.addEventListener("change", countryChanged);
  provincesSelect.addEventListener("change", provinceChanged);

console.log(editCountryID +" - "+editProvinceID +" - "+editCityID);

  if(!isNaN(editCountryID) ||  !isNaN(editProvinceID) || !isNaN(editCityID))
  {
    var countryOptions = countrySelect.getElementsByTagName("option");
    for (var i = 0; i < countryOptions.length; i++) {
      countryOptions[i].selected= false;

      if(countryOptions[i].value ==editCountryID){
        countryOptions[i].selected= true;
      }
    }

    countryChanged();
    var provinceOptions = provincesSelect.getElementsByTagName("option");
    for (var i = 0; i < provinceOptions.length; i++) {
      provinceOptions[i].selected= false;

      if(provinceOptions[i].value ==editProvinceID){
        provinceOptions[i].selected= true;
      }
    }
    provinceChanged();
    var cityOptions = citiesSelect.getElementsByTagName("option");
    for (var i = 0; i < cityOptions.length; i++) {
      cityOptions[i].selected= false;

      if(cityOptions[i].value ==editCityID){
        cityOptions[i].selected= true;
      }
    }
  }



  // var http = new XMLHttpRequest;
  // http.onreadystatechange = function() {
  //   //readyState == 4: significa que se completó el http request y ya está
  //   //disponible el resultado (en responseText)
  //   console.log(this.readyState);
  //   console.log(this.status);
  //   if(this.readyState == 4 && this.status == 200) {
  //       var response = JSON.parse(this.responseText);
  //       //console.log(resultado);
  //       // document.querySelector('.tareas').innerHTML = '';
  //       console.log(response);
  //       response.countries.forEach(function(country) {
  //         var provinces = country.provinces;
  //         var cities = country.provinces;
  //         // var html = '<div class="tarea"><div class="autor">' + tarea.autor.nombre + '</div><div class="descripcion">' + tarea.descripcion + '</div><div class="etiquetas">' + etiquetas + '</div></div>';
  //         // document.querySelector('.tareas').innerHTML += html;
  //         console.log(country.name);
  //       });
  //
  //   }
  // }
  // // callback del on click
  //   var apitoken = '{{Auth::user()->api_token}}';
  //   http.open('GET', 'http://127.0.0.1:8000/api/admin/countries?api_token='+apitoken);
  //   http.send();

</script>
