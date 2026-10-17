<?php
$mensaje = "Este es mi comentario para soporte técnico. ";
$limite = 180;
$longitud = strlen($mensaje);
echo $mensaje;
echo "<BR>";
echo "<BR>";
echo "Longitud: $longitud";
echo "<BR>";
$diferencia = $limite - $longitud;
echo "<BR>";
if ($diferencia >= 0) {
    echo "te quedan" . $diferencia . " caracteres para el límite.";
} else {
    echo "te sobran " . $diferencia . " caracteres del límite.";
}

?>