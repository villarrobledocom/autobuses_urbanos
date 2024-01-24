<?php include 'paradas.php' ?>
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
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fork-awesome@1.1.7/css/fork-awesome.min.css" integrity="sha256-gsmEoJAws/Kd3CjuOQzLie5Q3yshhvmo7YNtBG7aaEY=" crossorigin="anonymous" />
		<link rel="stylesheet" href="assets/estilo.css" />
		<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
		<script src="https://www.villarrobledo.com/assets/scripts/acepto.js"></script>
	</head>
	<body onload="iniciar();">
		<h1>Autobuses urbanos de Villarrobledo</h1>
		<!-- <p class="amu">Los autobuses son gratuitos desde enero de 2024.</p> -->
		<!-- <?php include 'carnaval.php' ?> -->
		<div id="mi-mapa">Cargando mapa de paradas...</div>
		<div id="geo"></div>
		<div id="ayuda"></div>
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
		<p>Los autobuses urbanos son <strong>GRATUITOS</strong> desde enero de 2024.</p>
		<p>Regulada en la <a href="https://www.villarrobledo.com/admin/data/docs/ciqwiezvpouahati.pdf" target="_blank">ordenanza fiscal número 24</a>.</p>
		<h2>Más información</h2>
		<p>Llamando a los teléfonos <span class="telefono">661 490 767</span> o <span class="telefono">661 483 381</span>.</p>
		<p>Descarga <a href="assets/horarios_autobuses.pdf" target="_blank">aquí</a> el folleto con los horarios (PDF de 670 KB).</p>
		<?php include 'compartir.php'; ?>
		<div style="margin: 2rem 1rem; text-align: center; font-size: 0.8rem; font-style: italic;">
			<p>Aplicación web creada por el <a href="https://www.villarrobledo.com">Ayuntamiento de Villarrobledo</a>.<br />Disponible en <a href="https://codigo.villarrobledo.com">código libre del Ayuntamiento de Villarrobledo</a>.</p>
			<p><a href="https://www.villarrobledo.com/legal.html">Aviso legal</a> | <a href="https://www.villarrobledo.com/privacidad.html">Política de privacidad</a> | <a href="https://www.villarrobledo.com/cookies.html">Política de cookies</a></p>
		</div>
		<?php include 'mapa.php'; ?>
	</body>
</html>
