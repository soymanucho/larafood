{{ csrf_field() }}

<label for="id_city">Ciudades</label>
<select class="form-control" name="id_city">
  @foreach ($cities as $city)
    <option value="{{ $city->id }}">
      {{ $city->name }} ({{$city->province->name}}, {{$city->province->country->name}})
    </option>
  @endforeach
</select>
<div>
  <label for="name">Nombre:</label>
  <input type="text" name="name" id="name" value="{{ old('name',$store->name)}}"/>
  <br>
  <label for="address">Dirección:</label>
  <input type="text" name="address" id="address" value="{{ old('address',$store->address)}}"/>
</div>



<script type="text/javascript">

  var http = new XMLHttpRequest;
  http.onreadystatechange = function() {
    //readyState == 4: significa que se completó el http request y ya está
    //disponible el resultado (en responseText)
    console.log(this.readyState);
    console.log(this.status);
    if(this.readyState == 4 && this.status == 200) {
        var response = JSON.parse(this.responseText);
        //console.log(resultado);
        // document.querySelector('.tareas').innerHTML = '';
        console.log(response);
        response.countries.forEach(function(country) {
          var provinces = country.provinces;
          var cities = country.provinces;
          // var html = '<div class="tarea"><div class="autor">' + tarea.autor.nombre + '</div><div class="descripcion">' + tarea.descripcion + '</div><div class="etiquetas">' + etiquetas + '</div></div>';
          // document.querySelector('.tareas').innerHTML += html;
          console.log(country.name);
        });

    }
  }
  // callback del on click
    var apitoken = '{{Auth::user()->api_token}}';
    http.open('GET', 'http://127.0.0.1:8000/api/admin/countries?api_token='+apitoken);
    http.send();

</script>
