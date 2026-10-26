<?php
ini_set('log_errors',1);
error_reporting(E_ALL);

$comentarios = [
    "Me ha encantado la web",
    "Faltan más imágenes",
    "Buena organización del contenido",
    "Muy útil la información publicada",
    "El diseño es muy claro y sencillo",
    "Sería bueno añadir un buscador",
    "Los colores son agradables",
    "Faltan ejemplos prácticos",
    "La velocidad de carga es buena",
    "La sección de contacto funciona muy bien"
];

$comentarioAleatorio = $comentarios[array_rand($comentarios)];
$fecha = date("[Y-m-d H:i:s]");

$linea = $fecha . " " . $comentarioAleatorio . "\n";
$path = __DIR__ . "/comentarios.txt";

$fh = fopen($path, "a");


if ($fh !== false) {
    fwrite($fh, $linea);
    fclose($fh);
    echo "Comentario guardado correctamente";
} else {
    exit(" [ERROR CRÍTICO] No se puede abrir el documento.");
}




?>