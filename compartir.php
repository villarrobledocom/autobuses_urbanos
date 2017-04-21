<?php

$url = "http://" . $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
echo '<ul id="sharer">Comparte';
echo '<li><a href="https://www.facebook.com/sharer/sharer.php?u=' . $url . '&t=Autobuses urbanos de Villarrobledo" title="Compartir en Facebook" target="_blank"><span class="icon-facebook"></span></a></li>';
echo '<li><a href="https://twitter.com/intent/tweet?source=' . $url . '&text=Autobuses urbanos de Villarrobledo:' . $url . '" target="_blank" title="Tuitear"><span class="icon-twitter"></span></a></li>';
echo '<li><a href="https://plus.google.com/share?url=' . $url . '" target="_blank" title="Compartir en Google+"><span class="icon-google-plus"></span></a></li>';
echo '<li><a href="mailto:?subject=Autobuses urbanos de Villarrobledo&body=Visita ' . $url . '" target="_blank" title="Enviar por correo electrónico"><span class="icon-envelop"></span></a></li>';
echo '</ul>';

?>
