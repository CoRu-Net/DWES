<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cabecera</title>
</head>
<body>
    <h1>📝 Gestor de comentarios</h1>
</body>
</html>
<?php
$path = __DIR__ . "/comentarios.txt";
ini_set('log_errors',1);
error_reporting(E_ALL);

if (!file_exists($path) || filesize($path) === 0) {
    exit(" [ERROR CRÍTICO] El archivo no existe o está vavio.");
} else {
    $fh = fopen($path, "r");

    if ($fh !== false) {
        $totalComentarios = 0;
        $ultimoComentario = "";        
        echo "<ul>";
        while (($linea = fgets($fh)) !== false) {

            echo "<li>" . htmlspecialchars($linea) . "</li>";
        }
        echo "</ul>";
        echo "Numero de comentarios : $totalComentarios";
        echo "<BR>";
        echo "Numero de comentarios : $ultimoComentario";
        fclose($fh);
    } else {
         exit(" [ERROR CRÍTICO] No se puede leer el documento.");
    }
}
?>