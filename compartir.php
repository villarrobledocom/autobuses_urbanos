<?php

$url = "https://" . $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
echo '<ul id="sharer">Comparte';
echo '<li><a href="mailto:?subject=Autobuses urbanos de Villarrobledo&body=Visita ' . $url . '" target="_blank" title="Enviar por correo electrónico"><i class="fa fa-envelope" title="Icono de un sobre, al pincharlo abre tu cliente de correo electrónico."></i></a></li>';
echo '<li><a href="https://twitter.com/intent/tweet?source=' . $url . '&text=Autobuses urbanos de Villarrobledo:' . $url . '" target="_blank" title="Tuitear"><i class="fa fa-twitter" title="Icono de Twitter, al pincharlo crea un tuit con la información de esta página."></i></a></li>';
echo '<li><a href="https://www.facebook.com/sharer/sharer.php?u=' . $url . '&t=Autobuses urbanos de Villarrobledo" title="Compartir en Facebook" target="_blank"><i class="fa fa-facebook" title="Icono de Facebook, al pincharlo, si estás en Facebook, comparte la información de esta página, si no, te invita a iniciar sesión."></i></a></li>';
echo '<li><a href="whatsapp://send?text=' . $title . ': ' . $url . '" target="_blank"><i class="fa fa-whatsapp" title="Icono de WhatsApp, al pincharlo, si tienes WhatsApp instalado, comparte la información de esta página."></i></a></li>';
echo '</ul>';

?>