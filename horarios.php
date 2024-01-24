<?php

$miparada = $_GET['parada'];

// *********************************************************
// ***** Cargar los horarios de las líneas en un array *****
// *********************************************************

$linea1 = array(
  'Institutos' => array(
    'Amarilla' => array('08:22' , '09:15', '10:01', '11:25', '12:15', '13:04', '13:49', '14:20'),
    'Naranja' => array(),
    'Verde' => array('09:26', '09:56', '10:56', '11:56', '12:56')
  ),
  'Centro de Salud' => array(
    'Amarilla' => array('07:59', '08:32' , '09:22', '10:41', '11:30', '12:20', '13:08', '13:51', '14:21'),
    'Naranja' => array('16:01', '17:01', '18:01', '19:01', '20:01'),
    'Verde' => array('09:00', '10:00', '11:00', '12:00', '13:00')
  ),
  'Convento Carmelitas' => array(
    'Amarilla' => array('07:59', '08:33' , '09:23', '10:42', '11:31', '12:21', '13:10', '13:52', '14:22'),
    'Naranja' => array('16:03', '17:03', '18:03', '19:03', '20:03'),
    'Verde' => array('09:01', '10:01', '11:01', '12:01', '13:01')
  ),
  'Estación de Autobuses A' => array(
    'Amarilla' => array('08:00', '08:35' , '09:25', '10:43', '11:32', '12:22', '13:11', '13:54', '14:23'),
    'Naranja' => array('15:05', '16:05', '17:05', '18:05', '19:05', '20:04'),
    'Verde' => array('09:02', '10:02', '11:02', '12:02', '13:02')
  ),
  'Nueva' => array(
    'Amarilla' => array('08:01', '08:36' , '09:26', '10:45', '11:33', '12:23', '13:13', '13:55', '14:24'),
    'Naranja' => array('15:06', '16:06', '17:06', '18:06', '19:06', '20:05'),
    'Verde' => array('09:03', '10:03', '11:03', '12:03', '13:03')
  ),
  'Plaza del Rollo' => array(
    'Amarilla' => array('08:02', '08:38' , '09:28', '10:46', '11:35', '12:25', '13:15', '13:56', '14:25'),
    'Naranja' => array('15:07', '16:07', '17:07', '18:07', '19:07', '20:06'),
    'Verde' => array('09:04', '10:04', '11:04', '12:04', '13:04')
  ),
  'Herreros' => array(
    'Amarilla' => array('08:04', '08:40' , '09:30', '10:48', '11:36', '12:26', '13:16', '13:57', '14:26'),
    'Naranja' => array('15:08', '16:08', '17:08', '18:07', '19:07', '20:07'),
    'Verde' => array('09:05', '10:05', '11:05', '12:05', '13:05')
  ),
  'Escuela de Música' => array(
    'Amarilla' => array('08:05', '08:41' , '09:31', '10:50', '11:38', '12:27', '13:17', '13:58', '14:27'),
    'Naranja' => array('15:09', '16:08', '17:08', '18:08', '19:08', '20:08'),
    'Verde' => array('09:06', '10:06', '11:06', '12:06', '13:06')
  ),
  'Escorial-Cohete' => array(
    'Amarilla' => array('08:07', '08:42' , '09:32', '10:51', '11:39', '12:28', '13:18', '13:59', '14:28'),
    'Naranja' => array('15:09', '16:09', '17:09', '18:09', '19:09', '20:09'),
    'Verde' => array('09:07', '10:07', '11:07', '12:07', '13:07')
  ),
  'Escorial' => array(
    'Amarilla' => array('08:43' , '09:34', '10:52', '11:40', '12:29', '13:19', '14:00', '14:29'),
    'Naranja' => array(),
    'Verde' => array()
  ),
  'Alcalde Francisco Segovia B' => array(
    'Amarilla' => array('08:44' , '09:35', '10:53', '11:41', '12:30', '13:20'),
    'Naranja' => array(),
    'Verde' => array()
  ),
  'Parque Infantil de Tráfico B' => array(
    'Amarilla' => array('08:44' , '09:35', '10:53', '11:41', '12:30', '13:20'),
    'Naranja' => array(),
    'Verde' => array()
  ),
  'Plaza Carretas' => array(
    'Amarilla' => array('08:10', '08:45' , '09:36', '10:54', '11:42', '12:31', '13:21'),
    'Naranja' => array('15:10', '16:10', '17:10', '18:10', '19:10', '20:10'),
    'Verde' => array('09:10', '10:10', '11:10', '12:10', '13:10')
  ),
  'Parque Tinajeros' => array(
    'Amarilla' => array('08:09', '08:46' , '09:37', '10:55', '11:43', '12:32', '13:22'),
    'Naranja' => array('15:11', '16:11', '17:11', '18:11', '19:11', '20:11'),
    'Verde' => array('09:08', '10:08', '11:08', '12:08', '13:08')
  ),
  'Cementerio' => array(
    'Amarilla' => array('08:47' , '09:38', '10:56', '11:44', '12:33', '13:23'),
    'Naranja' => array(),
    'Verde' => array()
  ),
  'Centro de Mayores' => array(
    'Amarilla' => array('08:48' , '09:39', '10:57', '11:45', '12:34', '13:24'),
    'Naranja' => array(),
    'Verde' => array()
  ),
  'Piscinas' => array(
    'Amarilla' => array('08:49' , '09:40', '10:58', '11:46', '12:35', '13:25'),
    'Naranja' => array(),
    'Verde' => array()
  ),
  'Miguel de Cervantes-Caballero del Verde Gabán A' => array(
    'Amarilla' => array('08:50' , '09:41', '10:59', '11:47', '12:36', '13:26'),
    'Naranja' => array(),
    'Verde' => array()
  ),
  'Hospital' => array(
    'Amarilla' => array('08:52' , '09:42', '11:03', '11:49', '12:39', '13:30'),
    'Naranja' => array(),
    'Verde' => array()
  ),
  'Miguel de Cervantes-Caballero del Verde Gabán B' => array(
    'Amarilla' => array('08:54' , '09:43', '11:04', '11:53', '12:43', '13:31'),
    'Naranja' => array(),
    'Verde' => array()
  ),
  'Miguel de Cervantes-Caballero de los Espejos' => array(
    'Amarilla' => array('08:56' , '09:44', '11:05', '11:54', '12:44', '13:32'),
    'Naranja' => array(),
    'Verde' => array('09:10' , '10:10', '11:10', '12:10', '13:10')
  ),
  'Alcalde Francisco Segovia A' => array(
    'Amarilla' => array('08:08', '08:58' , '09:46', '11:06', '11:55', '12:45', '13:33', '14:02', '14:30'),
    'Naranja' => array('15:11', '16:11' , '17:11', '18:11', '19:11', '20:11'),
    'Verde' => array('09:11' , '10:11', '11:11', '12:11', '13:11')
  ),
  'Parque Infantil de Tráfico A' => array(
    'Amarilla' => array('08:09', '08:59' , '09:47', '11:07', '11:56', '12:46', '13:34', '14:03', '14:31'),
    'Naranja' => array('15:12', '16:12' , '17:12', '18:12', '19:12', '20:12'),
    'Verde' => array('09:12' , '10:12', '11:12', '12:12', '13:12')
  ),
  'Pedro Muñoz' => array(
    'Amarilla' => array('08:10', '09:00' , '09:48', '11:08', '11:57', '12:47', '13:35', '14:04', '14:32'),
    'Naranja' => array('15:13', '16:13' , '17:13', '18:13', '19:13', '20:13'),
    'Verde' => array('09:13' , '10:13', '11:13', '12:13', '13:13')
  ),
  'Parque del Terrero' => array(
    'Amarilla' => array('08:11', '09:01' , '09:49', '11:09', '11:58', '12:48', '13:36', '14:05', '14:33'),
    'Naranja' => array('15:14', '16:14' , '17:14', '18:14', '19:14', '20:14'),
    'Verde' => array('09:14' , '10:14', '11:14', '12:14', '13:14')
  ),
  'Corredero-Requena' => array(
    'Amarilla' => array('08:12', '09:03' , '09:50', '11:11', '11:59', '12:49', '13:38', '14:06', '14:34'),
    'Naranja' => array('15:15', '16:15' , '17:15', '18:15', '19:15', '20:15'),
    'Verde' => array('09:15' , '10:15', '11:15', '12:15', '13:15')
  ),
  'Corredero-Santa María' => array(
    'Amarilla' => array('08:12', '09:05' , '09:52', '11:12', '12:01', '12:51', '13:39', '14:07'),
    'Naranja' => array('15:16', '16:16' , '17:16', '18:16', '19:16', '20:16'),
    'Verde' => array('09:17' , '10:17', '11:17', '12:17', '13:17')
  ),
  'Mercado de Abastos' => array(
    'Amarilla' => array('08:13', '09:06' , '09:53', '11:13', '12:02', '12:52', '13:40', '14:08'),
    'Naranja' => array('15:17', '16:17' , '17:17', '18:17', '19:17', '20:18'),
    'Verde' => array('09:19' , '10:19', '11:19', '12:19', '13:19')
  ),
  'San Bernardo' => array(
    'Amarilla' => array('08:14', '09:08' , '09:55', '11:15', '12:05', '12:55', '13:42', '14:09'),
    'Naranja' => array('15:18', '16:18' , '17:18', '18:18', '19:18', '20:20'),
    'Verde' => array('09:20' , '10:20', '11:20', '12:20', '13:20')
  ),
  'Pasaje La Estrella' => array(
    'Amarilla' => array('08:15', '09:10' , '09:56', '11:17', '12:07', '12:57', '13:43', '14:10'),
    'Naranja' => array('15:20', '16:20' , '17:20', '18:20', '19:20'),
    'Verde' => array('09:22' , '10:22', '11:22', '12:22', '13:22')
  ),
  'CEIP Virrey Morcillo' => array(
    'Amarilla' => array('08:16', '09:11' , '09:57', '11:18', '12:08', '12:58', '13:44', '14:12'),
    'Naranja' => array('15:21', '16:21' , '17:21', '18:21', '19:21'),
    'Verde' => array('09:23' , '10:23', '11:23', '12:23', '13:23')
  ),
  'Estación de Autobuses B' => array(
    'Amarilla' => array('08:17', '09:12' , '09:58', '11:19', '12:09', '12:59', '13:45', '14:14'),
    'Naranja' => array('15:23', '16:23' , '17:23', '18:23', '19:23'),
    'Verde' => array('09:24' , '10:24', '11:24', '12:24', '13:24')
  ),
  'Estación RENFE' => array(
    'Amarilla' => array('08:18', '09:13' , '09:59', '11:20', '12:10', '13:00', '13:46', '14:15'),
    'Naranja' => array('15:24', '16:24' , '17:24', '18:24', '19:24'),
    'Verde' => array('09:25' , '10:25', '11:25', '12:25', '13:25')
  )
);

$linea2 = array(
  'Institutos' => array(
    'Amarilla' => array('07:58', '08:23' , '15:25'),
    'Naranja' => array('16:25', '17:25', '18:25', '19:25'),
    'Verde' => array('09:26', '10:26', '11:26', '12:26', '13:26')
  ),
  'Centro de Salud' => array(
    'Amarilla' => array('07:59', '08:32' , '09:20', '10:45', '11:30', '12:22', '13:08', '13:50', '14:21'),
    'Naranja' => array('15:30', '16:30', '17:30', '18:30', '19:30'),
    'Verde' => array('09:30', '10:30', '11:30', '12:30', '13:30')
  ),
  'Convento Carmelitas' => array(
    'Amarilla' => array('07:59', '08:33' , '09:21', '10:46', '11:31', '12:23', '13:10', '13:51', '14:22'),
    'Naranja' => array('15:31', '16:31', '17:31', '18:31', '19:31'),
    'Verde' => array('09:31', '10:31', '11:31', '12:31', '13:31')
  ),
  'Plaza San Ildefonso' => array(
    'Amarilla' => array('08:00', '08:34' , '09:23', '10:48', '11:33', '12:25', '13:12', '13:52', '14:23'),
    'Naranja' => array('15:33', '16:33', '17:33', '18:33', '19:33'),
    'Verde' => array('09:32', '10:32', '11:32', '12:32', '13:32')
  ),
  'San Bernardo' => array(
    'Amarilla' => array('08:01', '08:36' , '09:25', '10:50', '11:35', '12:27', '13:14', '13:54', '14:25'),
    'Naranja' => array('15:35', '16:35', '17:35', '18:35', '19:35'),
    'Verde' => array('09:35', '10:35', '11:35', '12:35', '13:35')
  ),
  'Plaza Santa María' => array(
    'Amarilla' => array('08:03', '08:38' , '09:27', '10:52', '11:37', '12:29', '13:16', '13:55', '14:27'),
    'Naranja' => array('15:37', '16:37', '17:37', '18:37', '19:37'),
    'Verde' => array('09:36', '10:36', '11:36', '12:36', '13:36')
  ),
  'Cementerio' => array(
    'Amarilla' => array('08:05', '08:40' , '09:29', '10:54', '11:39', '12:31', '13:17', '13:56', '14:29'),
    'Naranja' => array('15:38', '16:38', '17:38', '18:38', '19:38'),
    'Verde' => array('09:38', '10:38', '11:38', '12:38', '13:38')
  ),
  'Centro de Mayores' => array(
    'Amarilla' => array('08:06', '08:42' , '09:31', '10:57', '11:42', '12:33', '13:19', '13:57', '14:30'),
    'Naranja' => array('15:39', '16:39', '17:39', '18:39', '19:39'),
    'Verde' => array()
  ),
  'Piscinas' => array(
    'Amarilla' => array('08:08', '08:44' , '09:33', '10:59', '11:44', '12:36', '13:20', '13:58', '14:31'),
    'Naranja' => array('15:40', '16:40', '17:40', '18:40', '19:40'),
    'Verde' => array()
  ),
  'Miguel de Cervantes-Caballero del Verde Gabán A' => array(
    'Amarilla' => array('08:46' , '09:35', '11:00', '11:45', '12:37', '13:21', '13:59', '14:32'),
    'Naranja' => array('15:42', '16:42', '17:42', '18:42', '19:42'),
    'Verde' => array('09:41', '10:41', '11:41', '12:41', '13:41')
  ),
  'Hospital' => array(
    'Amarilla' => array('08:52' , '09:38', '11:05', '11:50', '12:42', '13:28', '14:00', '14:33'),
    'Naranja' => array('15:43', '16:43', '17:43', '18:43', '19:43'),
    'Verde' => array('09:42', '10:42', '11:42', '12:42', '13:42')
  ),
  'Dos de Mayo-San Sebastián' => array(
    'Amarilla' => array('08:08', '08:53' , '09:39', '11:06', '11:51', '12:44', '13:29', '14:02', '14:35'),
    'Naranja' => array('15:44', '16:44', '17:44', '18:44', '19:44'),
    'Verde' => array('09:43', '10:43', '11:43', '12:43', '13:43')
  ),
  'Pío XII' => array(
    'Amarilla' => array('08:10', '08:55' , '09:41', '11:09', '11:53', '12:46', '13:30', '14:03', '14:36'),
    'Naranja' => array('15:45', '16:45', '17:45', '18:45', '19:45'),
    'Verde' => array('09:44', '10:44', '11:44', '12:44', '13:44')
  ),
  'Infante Jaime' => array(
    'Amarilla' => array('08:12', '08:56' , '09:43', '11:10', '11:55', '12:48', '13:32', '14:04', '14:37'),
    'Naranja' => array('15:46', '16:46', '17:46', '18:46', '19:46'),
    'Verde' => array('09:45', '10:45', '11:45', '12:45', '13:45')
  ),
  'Residencia Mayores' => array(
    'Amarilla' => array('08:13', '08:58' , '09:45', '11:12', '11:57', '12:50', '13:34', '14:05', '14:38'),
    'Naranja' => array('15:48', '16:48', '17:48', '18:48', '19:48'),
    'Verde' => array('09:47', '10:47', '11:47', '12:47', '13:47')
  ),
  'Reyes Católicos-Picassent' => array(
    'Amarilla' => array('08:14', '09:00' , '09:46', '11:14', '11:59', '12:52', '13:35', '14:06', '14:39'),
    'Naranja' => array('15:49', '16:49', '17:49', '18:49', '19:49'),
    'Verde' => array('09:48', '10:48', '11:48', '12:48', '13:48')
  ),
  'Reyes Católicos-Infante Jaime' => array(
    'Amarilla' => array('08:15', '09:02' , '09:47', '11:15', '12:01', '12:53', '13:36', '14:07'),
    'Naranja' => array('15:50', '16:50', '17:50', '18:50', '19:50'),
    'Verde' => array('09:49', '10:49', '11:49', '12:49')
  ),
  'Reyes Católicos-San Juan' => array(
    'Amarilla' => array('08:16', '09:04' , '09:48', '11:16', '12:02', '12:54', '13:37', '14:08'),
    'Naranja' => array('15:51', '16:51', '17:51', '18:51', '19:51'),
    'Verde' => array('09:50', '10:50', '11:50', '12:50')
  ),
  'San Clemente-Jaraba' => array(
    'Amarilla' => array('08:17', '09:06' , '09:50', '11:17', '12:04', '12:55', '13:38', '14:09'),
    'Naranja' => array(),
    'Verde' => array()
  ),
  'Placeta Don Carlos' => array(
    'Amarilla' => array('08:18', '09:08' , '09:51', '11:18', '12:06', '12:56', '13:40', '14:11'),
    'Naranja' => array(),
    'Verde' => array()
  ),
  'Jardinillos' => array(
    'Amarilla' => array('08:19', '09:09' , '09:53', '11:20', '12:07', '12:58', '13:41', '14:12'),
    'Naranja' => array(),
    'Verde' => array()
  ),
  'Virrey Morcillo' => array(
    'Amarilla' => array('08:20', '09:11' , '09:54', '11:21', '12:08', '12:59', '13:42', '14:13'),
    'Naranja' => array(),
    'Verde' => array()
  ),
  'Camarilla-Doctor Figueroa' => array(
    'Amarilla' => array('08:21', '09:13' , '09:56', '11:23', '12:10', '13:01', '13:44', '14:14'),
    'Naranja' => array('15:52', '16:52', '17:52', '18:52', '19:52'),
    'Verde' => array('09:52', '10:52', '11:52', '12:52')
  ),
  'Avenida del Este' => array(
    'Amarilla' => array('08:22', '09:15' , '09:57', '11:25', '12:12', '13:02', '13:45', '14:15'),
    'Naranja' => array('15:53', '16:53', '17:53', '18:53', '19:53'),
    'Verde' => array('09:53', '10:53', '11:53', '12:53')
  )
);

// ********************************************
// ***** Cálculo de fechas, horas y zonas *****
// ********************************************

$semana_dia = date('w', strtotime('today')); // 0 para el domingo
$rzona = 'ayn';
if($semana_dia == 5) $rzona = 'a';
if($semana_dia == 6) $rzona = 'v';
if($semana_dia == 0) $rzona = ''; // Domingo
$s_hoy = date('Y-m-d', strtotime('today'));
$s_verano_inicio = date('Y-m-d', strtotime('15 June'));
$s_verano_fin = date('Y-m-d', strtotime('31 August'));
if(($s_hoy > $s_verano_inicio) && ($s_hoy < $s_verano_fin)) $horario_verano = 1; else $horario_verano = 0;

// ********************************
// ***** Mostrar los horarios *****
// ********************************

function comprobar_proxima($zona, $hora) {
  global $rzona, $next, $horarios;
  $thora = strtotime($hora);
  if($zona == $rzona && $thora > time() && $next == 0) {
    $horarios .= '<span class="next">' . $hora . '</span>';
    $next = 1;
  } else {
    $horarios .= '<span>' . $hora . '</span>';
  }
}

$horarios = '';

if(array_key_exists($miparada, $linea1)) {
  if($horario_verano) $delunesajueves = $linea1[$miparada]['Amarilla']; else $delunesajueves = array_merge($linea1[$miparada]['Amarilla'], $linea1[$miparada]['Naranja']);
  $viernes = $linea1[$miparada]['Amarilla'];
  $sabados = $linea1[$miparada]['Verde'];
  $next = 0;
  $horarios .= '<h3>Línea 1</h3>';
  if(!empty($delunesajueves)) {
    $horarios .= '<p>De lunes a jueves<br />';
    foreach($delunesajueves as $hora) comprobar_proxima('ayn', $hora);
    $horarios .= '</p>';
  }
  if(!empty($viernes)) {
    $horarios .= '<p>Viernes<br />';
    foreach($viernes as $hora) comprobar_proxima('a', $hora);
    $horarios .= '</p>';
  }
  if(!empty($sabados)) {
    $horarios .= '<p>Sábados<br />';
    foreach($sabados as $hora) comprobar_proxima('v', $hora);
    $horarios .= '</p>';
  }
  $horarios .= '<p>Los domingos no hay servicio.</p>';
}
if(array_key_exists($miparada, $linea2)) {
  if($horario_verano) $delunesajueves = $linea2[$miparada]['Amarilla']; else $delunesajueves = array_merge($linea2[$miparada]['Amarilla'], $linea2[$miparada]['Naranja']);
  $viernes = $linea2[$miparada]['Amarilla'];
  $sabados = $linea2[$miparada]['Verde'];
  $next = 0;
  $horarios .= '<h3>Línea 2</h3>';
  if(!empty($delunesajueves)) {
    $horarios .= '<p>De lunes a jueves<br />';
    foreach($delunesajueves as $hora) comprobar_proxima('ayn', $hora);
    $horarios .= '</p>';
  }
  if(!empty($viernes)) {
    $horarios .= '<p>Viernes<br />';
    foreach($viernes as $hora) comprobar_proxima('a', $hora);
    $horarios .= '</p>';
  }
  if(!empty($sabados)) {
    $horarios .= '<p>Sábados<br />';
    foreach($sabados as $hora) comprobar_proxima('v', $hora);
    $horarios .= '</p>';
  }
  $horarios .= '<p>Los domingos no hay servicio.</p>';
}

echo $horarios;

?>
