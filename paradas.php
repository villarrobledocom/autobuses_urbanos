<?php

// **********************************************************
// ***** Cargar la ubicación de las paradas en un array *****
// **********************************************************

$paradas = array(
  array('nombre' => 'Alcalde Francisco Segovia A', 'lat' => 39.26984778, 'lng' => -2.61706352),
  array('nombre' => 'Alcalde Francisco Segovia B', 'lat' => 39.26999729, 'lng' => -2.61669874),
  array('nombre' => 'Avenida del Este', 'lat' => 39.26962352, 'lng' => -2.59204388),
  array('nombre' => 'Camarilla-Doctor Figueroa', 'lat' => 39.26765497, 'lng' => -2.59555221),
  array('nombre' => 'CEIP Virrey Morcillo', 'lat' => 39.26145824, 'lng' => -2.60266542),
  array('nombre' => 'Cementerio', 'lat' => 39.27120995, 'lng' => -2.61065841),
  array('nombre' => 'Centro de Salud', 'lat' => 39.26451514, 'lng' => -2.59248376),
  array('nombre' => 'Centro de Mayores', 'lat' => 39.2717166, 'lng' => -2.60769725),
  array('nombre' => 'Convento Carmelitas', 'lat' => 39.26417456, 'lng' => -2.59528399),
  array('nombre' => 'Corredero-Requena', 'lat' => 39.26522119, 'lng' => -2.60802984),
  array('nombre' => 'Corredero-Santa María', 'lat' => 39.26604354, 'lng' => -2.60595918),
  array('nombre' => 'Dos de Mayo-San Sebastián', 'lat' => 39.27329052, 'lng' => -2.60342717),
  array('nombre' => 'Escorial', 'lat' => 39.26733933, 'lng' => -2.61531472),
  array('nombre' => 'Escorial-Cohete', 'lat' => 39.26723135, 'lng' => -2.61176348),
  array('nombre' => 'Escuela de Música', 'lat' => 39.2647228, 'lng' => -2.61137724),
  array('nombre' => 'Estación de Autobuses A', 'lat' => 39.26108442, 'lng' => -2.60079861),
  array('nombre' => 'Estación de Autobuses B', 'lat' => 39.26125056, 'lng' => -2.60068059),
  array('nombre' => 'Estación RENFE', 'lat' => 39.26108442, 'lng' => -2.59854555),
  array('nombre' => 'Herreros', 'lat' => 39.26349342, 'lng' => -2.61032581),
  array('nombre' => 'Hospital', 'lat' => 39.27919969, 'lng' => -2.60226846),
  array('nombre' => 'Infante Jaime', 'lat' => 39.27522154, 'lng' => -2.59680748),
  array('nombre' => 'Institutos', 'lat' => 39.26303654, 'lng' => -2.59067059),
  array('nombre' => 'Jardinillos', 'lat' => 39.26676204, 'lng' => -2.60186613),
  array('nombre' => 'Mercado de Abastos', 'lat' => 39.26658345, 'lng' => -2.60397434),
  array('nombre' => 'Miguel de Cervantes-Caballero del Verde Gabán A', 'lat' => 39.27791242, 'lng' => -2.60705352),
  array('nombre' => 'Miguel de Cervantes-Caballero del Verde Gabán B', 'lat' => 39.27812835, 'lng' => -2.60716081),
  array('nombre' => 'Miguel de Cervantes-Caballero de los Espejos', 'lat' => 39.27629292, 'lng' => -2.61217117),
  array('nombre' => 'Nueva', 'lat' => 39.26076875, 'lng' => -2.60543346),
  array('nombre' => 'Parque del Terrero', 'lat' => 39.26328575, 'lng' => -2.61249304),
  array('nombre' => 'Parque Infantil de Tráfico A', 'lat' => 39.26731441, 'lng' => -2.61738539),
  array('nombre' => 'Parque Infantil de Tráfico B', 'lat' => 39.26787093, 'lng' => -2.61698842),
  array('nombre' => 'Pasaje La Estrella', 'lat' => 39.26362632, 'lng' => -2.6044786),
  array('nombre' => 'Parque Tinajeros', 'lat' => 39.26972319, 'lng' => -2.61139065),
  array('nombre' => 'Pedro Muñoz', 'lat' => 39.2658691, 'lng' => -2.61425257),
  array('nombre' => 'Pío XII', 'lat' => 39.27370165, 'lng' => -2.59983301),
  array('nombre' => 'Piscinas', 'lat' => 39.27349401, 'lng' => -2.60675311),
  array('nombre' => 'Plaza Carretas', 'lat' => 39.27003674, 'lng' => -2.61466295),
  array('nombre' => 'Plaza del Rollo', 'lat' => 39.26161607, 'lng' => -2.60983229),
  array('nombre' => 'Placeta Don Carlos', 'lat' => 39.26908362, 'lng' => -2.59982228),
  array('nombre' => 'Plaza San Ildefonso', 'lat' => 39.26519628, 'lng' => -2.59910345),
  array('nombre' => 'Plaza Santa María', 'lat' => 39.2675013, 'lng' => -2.60650635),
  array('nombre' => 'Residencia Mayores', 'lat' => 39.27725632, 'lng' => -2.59417892),
  array('nombre' => 'Reyes Católicos-Infante Jaime', 'lat' => 39.27447406, 'lng' => -2.59300947),
  array('nombre' => 'Reyes Católicos-Picassent', 'lat' => 39.27667496, 'lng' => -2.59138942),
  array('nombre' => 'Reyes Católicos-San Juan', 'lat' => 39.27155048, 'lng' => -2.59465098),
  array('nombre' => 'San Bernardo', 'lat' => 39.26507168, 'lng' => -2.60448933),
  array('nombre' => 'San Clemente-Jaraba', 'lat' => 39.27010526, 'lng' => -2.59818077),
  array('nombre' => 'Virrey Morcillo', 'lat' => 39.2666416, 'lng' => -2.59798765)
);

// *********************************************
// ***** Crear los marcadores para el mapa *****
// *********************************************

echo '<script>var paradas = ' . json_encode($paradas) . '</script>';

?>
