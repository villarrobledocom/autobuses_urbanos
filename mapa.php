<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
<script>

/******************************/
/***** Variables globales *****/
/******************************/

// Iconos
var icono_bus = L.icon({
    iconUrl: 'assets/bus.png',
    iconSize: [16, 16],
    iconAnchor: [8, 0], // point of the icon which will correspond to marker's location
    popupAnchor: [0, 0] // point from which the popup should open relative to the iconAnchor
});
var icono_man = L.icon({
    iconUrl: 'assets/man.png',
    iconSize: [16, 16],
    iconAnchor: [8, 0], // point of the icon which will correspond to marker's location
    popupAnchor: [0, 0] // point from which the popup should open relative to the iconAnchor
});

// Mapas base
var OSM = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '© <a href="https://www.openstreetmap.org/copyright" target="_blank">OpenStreetMap</a>'
});
var IGN_PNOA_MA = L.tileLayer.wms('https://www.ign.es/wms-inspire/pnoa-ma', {
	layers: 'OI.OrthoimageCoverage',
	format: 'image/png',
	minZoom: 2.5,
	maxZoom: 17,
	attribution: 'PNOA © <a href="https://www.ign.es/ign/main/index.do" target="_blank">Instituto Geográfico Nacional de España</a>'
});
var mapas = {
	"Satélite": IGN_PNOA_MA,
	"OpenStreetMap": OSM
};

// Mi mapa y mi ubicación por defecto
var miMapa = L.map('mi-mapa', {
    center: [39.270, -2.602],
    zoom: 14,
    layers: [OSM],
    scrollWheelZoom: false
});
var aqui = new L.Marker([39.2678338, -2.6037897], {icon: icono_man, draggable: true}); // Por defecto en el centro de la ciudad
aqui.on('dragend', calcularDistancia);

// Objetos de la página
var parada = document.getElementById('parada');
var geo = document.getElementById('geo');
parada.addEventListener('change', function() {mostrarHorario();});

/***************************/
/***** Geolocalización *****/
/***************************/

var geoOpciones = {maximumAge: 0};

function geolocalizar() {
  if(navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(geoExito, geoError, geoOpciones);
  } else {
    mostrarMiUbicacion();
    geo.innerHTML = "Tu navegador no soporta GEOLOCALIZACIÓN así que consideramos que estás en el centro de Villarrobledo. Puedes arrastrar el monigote en el mapa o hacer click sobre una parada.";
  }
}

function geoExito(posicion) {
  aqui.setLatLng([posicion.coords.latitude, posicion.coords.longitude]);
  mostrarMiUbicacion();
  geo.innerHTML = "GEOLOCALIZACIÓN activada. Puedes arrastrar el monigote en el mapa o hacer click sobre una parada.";
}

function geoError(error) {
  mostrarMiUbicacion();
  switch(error.code) {
    case error.PERMISSION_DENIED:
      geo.innerHTML = "Denegaste la GEOLOCALIZACIÓN así que consideramos que estás en el centro de Villarrobledo. Puedes arrastrar el monigote en el mapa o hacer click sobre una parada.";
      break;
    case error.POSITION_UNAVAILABLE:
      geo.innerHTML = "La GEOLOCALIZACIÓN es imposible en este momento así que consideramos que estás en el centro de Villarrobledo. Puedes arrastrar el monigote en el mapa o hacer click sobre una parada.";
      break;
    case error.TIMEOUT:
      geo.innerHTML = "Se sobrepasó el tiempo permitido para la GEOLOCALIZACIÓN así que consideramos que estás en el centro de Villarrobledo. Puedes arrastrar el monigote en el mapa o hacer click sobre una parada.";
      break;
    case error.UNKNOWN_ERROR:
      geo.innerHTML = "Ocurrió un error desconocido de GEOLOCALIZACIÓN así que consideramos que estás en el centro de Villarrobledo. Puedes arrastrar el monigote en el mapa o hacer click sobre una parada.";
      break;
  }
}

/*********************/
/***** Funciones *****/
/*********************/

function mostrarParadas() {
  for(var i = 0; i < paradas.length; i ++) {
	  var estaParada = paradas[i];
	  var marcadorParada = L.marker([estaParada.lat, estaParada.lng], {icon: icono_bus}).addTo(miMapa);
    marcadorParada.bindPopup(estaParada.nombre);
    marcadorParada.on('click', cambiarParada);
  }
  mostrarHorario();
}

function cambiarParada(e) {
  var nombre = e.target.getPopup().getContent();
  var r = new XMLHttpRequest();
  r.open("GET", "horarios.php?parada=" + nombre, true);
  r.onreadystatechange = function () {
    if (r.readyState != 4 || r.status != 200) return;
    document.getElementById('horarios').innerHTML = r.responseText;
  };
  r.send();
  parada.value = nombre;
  aqui.setLatLng([e.latlng.lat, e.latlng.lng]);
  mostrarMiUbicacion();
}

function mostrarHorario() {
  var r = new XMLHttpRequest();
  r.open("GET", "horarios.php?parada=" + parada.value, true);
  r.onreadystatechange = function () {
    if (r.readyState != 4 || r.status != 200) return;
    document.getElementById('horarios').innerHTML = r.responseText;
  };
  r.send();
}

function mostrarMiUbicacion() {
  aqui.addTo(miMapa);
  calcularDistancia();
}

function calcularDistancia() {
  var distanciaMinima = 9999;
  var paradaCercana = '';
  var desde = aqui.getLatLng();
  for(var i = 0; i < paradas.length; i ++) {
	  var estaParada = paradas[i];
    var hasta = L.latLng(estaParada.lat, estaParada.lng);
    var distancia = desde.distanceTo(hasta).toFixed(0);
    if(parseInt(distancia) < parseInt(distanciaMinima)) {
      distanciaMinima = distancia;
      paradaCercana = estaParada.nombre;
    }
  }
  if(distanciaMinima < 25) {
    ayuda.innerHTML = 'Parada elegida: <strong>' + paradaCercana + '</strong>.';
  } else {
    ayuda.innerHTML = 'La parada más cercana es <strong>' + paradaCercana + '</strong> a unos ' + distanciaMinima + ' m.';
  }
  parada.value = paradaCercana;
  mostrarHorario();
}

function iniciar() {
  L.control.layers(mapas).addTo(miMapa);
  mostrarParadas();
  geolocalizar();
}

</script>