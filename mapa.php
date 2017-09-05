<script>

/***** Variables *****/

var search = location.search;
var item = search.split('=');
var miparada = decodeURIComponent(item[1]);
miparada = miparada.replace(/\+/g, ' ');

var map;
var infowindow;
var mymarker;
var here;
var mapOptions = {
  zoom: 13,
  center: {lat: 39.2678338, lng: -2.6037897},
  scrollwheel: false,
  zoomControl: false,
  scaleControl: false,
  streetViewControl: false,
  styles: [
    {featureType: "all", stylers: [{saturation: -100}]},
    {featureType: "all", stylers: [{visibility: "off"}]},
    {featureType: "road", stylers: [{visibility: "on"}]}
  ]
};

var geoOptions = {
  maximumAge: 0
};

var divGeo = document.getElementById('geo');
var divAyuda = document.getElementById('ayuda');
var selectParada = document.getElementById('parada');
selectParada.addEventListener('change', function() {showTimetable();});

/***** Geolocalización *****/

function getLocation() {
  if(navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(geoSuccess, geoError, geoOptions);
  } else {
    divGeo.innerHTML = "Tu navegador no soporta GEOLOCALIZACIÓN así que consideramos que estás en el centro de Villarrobledo.<br />Puedes arrastrar el monigote en el mapa o hacer click sobre una estación.";
    here = new google.maps.LatLng(39.2678338, -2.6037897); // Por defecto en el centro de la ciudad
    showPosition();
  }
}

function geoSuccess(position) {
  divGeo.innerHTML = "GEOLOCALIZACIÓN activada.<br />También puedes arrastrar el monigote en el mapa o hacer click sobre una estación.";
  here = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
  showPosition();
}

function geoError(error) {
  switch(error.code) {
    case error.PERMISSION_DENIED:
      divGeo.innerHTML = "Denegaste la GEOLOCALIZACIÓN así que consideramos que estás en el centro de Villarrobledo.<br />Puedes arrastrar el monigote en el mapa o hacer click sobre una estación.";
      break;
    case error.POSITION_UNAVAILABLE:
      divGeo.innerHTML = "La GEOLOCALIZACIÓN es imposible en este momento así que consideramos que estás en el centro de Villarrobledo.<br />Puedes arrastrar el monigote en el mapa o hacer click sobre una estación.";
      break;
    case error.TIMEOUT:
      divGeo.innerHTML = "Se sobrepasó el tiempo permitido para la GEOLOCALIZACIÓN así que consideramos que estás en el centro de Villarrobledo.<br />Puedes arrastrar el monigote en el mapa o hacer click sobre una estación.";
      break;
    case error.UNKNOWN_ERROR:
      divGeo.innerHTML = "Ocurrió un error desconocido de GEOLOCALIZACIÓN así que consideramos que estás en el centro de Villarrobledo.<br />Puedes arrastrar el monigote en el mapa o hacer click sobre una estación.";
      break;
  }
  here = new google.maps.LatLng(39.2678338, -2.6037897); // Por defecto en el centro de la ciudad
  showPosition();
}

/***** Entorno *****/

function loadParada(parada) {
  var opts = selectParada.options;
  for(var opt, j = 0; opt = opts[j]; j++) {
    if(opt.value == parada) {
      selectParada.selectedIndex = j;
      break;
    }
  }
}

function showPosition() {
  mymarker = new google.maps.Marker({
    map: map,
    position: here,
    draggable: true,
    icon: 'assets/man.png'
  });
  google.maps.event.addListener(mymarker, 'dragstart', function() {
    infowindow.close();
  });
  google.maps.event.addListener(mymarker, 'dragend', function(evt) {
    infowindow.close();
    here = new google.maps.LatLng(evt.latLng.lat(), evt.latLng.lng());
    mymarker.setMap(null);
    showPosition();
  });
  computeDistances();
}

function computeDistances() {
  var min_distance = 9999;
  var min_station = '';
  for(var i = 0; i < markers.length; i++) {
    var place = markers[i];
    var theirLatLng = new google.maps.LatLng(place.lat, place.lng);
    var marker = new google.maps.Marker({
      position: theirLatLng
    });
    var distance = google.maps.geometry.spherical.computeDistanceBetween(theirLatLng, here).toFixed(0);
    if(parseInt(distance) < parseInt(min_distance)) {
      min_distance = distance;
      min_station = place.nombre;
    }
  }
  loadParada(min_station);
  if(min_distance == 0) {
    divAyuda.innerHTML = 'Parada elegida: <strong>' + min_station + '</strong>.<br />Aparece <span class="next">&nbsp;destacado&nbsp;</span> el próximo paso del autobús.';
  } else {
    divAyuda.innerHTML = 'La parada más cercana es <strong>' + min_station + '</strong> a unos ' + min_distance + ' m.<br />Aparece <span class="next">&nbsp;destacado&nbsp;</span> el próximo paso del autobús.';
  }
  showTimetable();
}

function showTimetable() {
  var miparada = selectParada.options[selectParada.selectedIndex].value;
  var r = new XMLHttpRequest();
  r.open("GET", "horarios.php?parada=" + miparada, true);
  r.onreadystatechange = function () {
    if (r.readyState != 4 || r.status != 200) return;
    document.getElementById('horarios').innerHTML = r.responseText;
  };
  r.send();
}

/***** Mapa *****/

function setMarkers() {
  var bounds = new google.maps.LatLngBounds();
  for(var i = 0; i < markers.length; i++) {
    var place = markers[i];
    var theirLatLng = new google.maps.LatLng(place.lat, place.lng);
    var marker = new google.maps.Marker({
      map: map,
      position: theirLatLng,
      title: place.nombre,
      icon: 'assets/bus.png'
    });
    marker.addListener('click', function() {
      infowindow.setContent(this.title);
      infowindow.open(map, this);
      here = this.position;
      mymarker.setMap(null);
      showPosition();
    });
    bounds.extend(theirLatLng);
  }
  map.setCenter(bounds.getCenter());
  map.fitBounds(bounds);
}

function initMap() {
  map = new google.maps.Map(document.getElementById('map'), mapOptions);
  infowindow = new google.maps.InfoWindow();
  setMarkers();
  if(miparada == 'undefined') {
    getLocation();
  } else {
    for(var i = 0; i < markers.length; i++) {
      var place = markers[i];
      if(place.nombre == miparada){
        here = new google.maps.LatLng(place.lat, place.lng); // En la parada asignada con el codigo QR
      }
    }
    divGeo.innerHTML = 'Si escaneas el código QR no se usa la GEOLOCALIZACIÓN.<br />Puedes arrastrar el monigote en el mapa o hacer click sobre una estación.'
    showPosition();
    loadParada(miparada);
    showTimetable();
  }
}

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=your_own_google_maps_api_key&language=es&libraries=geometry&callback=initMap"></script>
