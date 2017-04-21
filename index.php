<?php include 'paradas.php'; ?>
<!DOCTYPE html>
<html lang="ES">
  <head>
    <meta charset="UTF-8" />
    <title>Autobuses urbanos de Villarrobledo</title>
    <meta name="description" content="Mapas y horarios de las líneas de autobuses urbanos de Villarrobledo" />
    <meta name="keywords" content="villarrobledo, autobuses, urbanos, mapas, horarios" />
    <meta name="application-name" content="villarrobledo.com" />
    <meta name="author" content="Ayuntamiento de Villarrobledo" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#950054">
    <meta name="msapplication-navbutton-color" content="#950054">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <link rel="shortcut icon" href="assets/bus.png" />
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Bitter:400,700' />
    <link rel="stylesheet" href="assets/estilo.css" />
  </head>
  <body>
    <h1>Autobuses urbanos de Villarrobledo</h1>
    <div id="map">Cargando mapa de paradas...</div>
    <div id="geo">Comprobando GEOLOCALIZACIÓN...</div>
    <div id="ayuda">Calculando...</div>
    <div id="consulta">
      <?php
      if(is_array($paradas)) {
        echo '<select name="parada" id="parada">';
        foreach ($paradas as $parada) {
          echo '<option value="' . $parada['nombre'] . '">' . $parada['nombre'] . '</option>';
        }
        echo '</select>';
      }
      ?>
      <div id="horarios"></div>
    </div>
    <h2>Tarifa</h2>
    <p>Ordinaria: <strong>0.60 €</strong></p>
    <p>Estudiantes, familia numerosa: <strong>0.50 €</strong></p>
    <p>Jubilados residentes: <strong>0.25 €</strong></p>
    <h2>Bono-bus</h2>
    <p>Adquiere tu tarjeta Bono-bus en los mismos autobuses. Cuesta <strong>2 €</strong> y luego se puede recargar con 4 o 5 € (o múltiplos) también en los mismos autobuses. De esta manera el viaje sale a 0.37 € (0.27 € para estudiantes o familia numerosa).</p>
    <h2>Más información</h2>
    <p>Llamando a los teléfonos <strong>661 490 667</strong> o <strong>661 483 381</strong>.</p>
    <p>Descarga <a href="assets/horarios_autobuses.pdf" target="_blank">aquí</a> el folleto con los horarios (PDF de 670 KB).</p>
    <?php include 'compartir.php'; ?>
    <?php include 'mapa.php'; ?>
  </body>
</html>
