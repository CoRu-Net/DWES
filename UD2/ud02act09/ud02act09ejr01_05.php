<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
ini_set('log_errors', '1');
ini_set('error_log', __DIR__ . '/app.log');
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
    "La sección de contacto fun"
    ];

    $path = __DIR__ . "/comentarios.txt";
    $comentarioElegido = $comentarios[array_rand($comentarios)];
    $fechaHora = date("Y-m-d H:i:s");
    $linea = "[$fechaHora] $comentarioElegido\n";

    $fh = @fopen($path, "a");
    if ($fh === false) {
    $msgError = "[ERROR] No se pudo abrir o crear el archivo comentarios.txt para escritura.";
    error_log($msgError); 
    echo "<p style='color: red; font-weight: bold;'>$msgError</p>"; 
} else {
    if (fwrite($fh, $linea) === false) {
        $msgError = "[ERROR] No se pudo escribir el comentario en el archivo.";
        error_log($msgError);
        echo "<p style='color: red; font-weight: bold;'>$msgError</p>";
    }
    fclose($fh);
}
$historial = [];
//Lectura
if (file_exists($path)) {
    $fh = @fopen($path, "r");
    if ($fh === false) {
        $msgError = "[ERROR] No se pudo abrir el archivo para lectura.";
        error_log($msgError);
        echo "<p style='color: red; font-weight: bold;'>$msgError</p>";
    } else {
        while (($lineaLeida = fgets($fh)) !== false) {
            $lineaLimpia = trim($lineaLeida);
            if ($lineaLimpia !== "") {
                $historial[] = $lineaLimpia;
            }
        }
        fclose($fh);
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor de Comentarios</title>
</head>
<body>

    <h1>📝 Gestor de Comentarios (sin BD)</h1>

<p>
        <strong>Último comentario añadido:</strong><strong> <em><?= htmlspecialchars($comentarioElegido) ?></em></strong>
    </p>
   <p><strong>Total de comentarios guardados:</strong> <?= count($historial) ?></p>

</body>
</html>
<?php 
if (empty($historial)) {
    echo "<p>No hay comentarios todavía.</p>"; 
} else {
    echo "<ul>";
    foreach ($historial as $item) {
        echo "<li>" . htmlspecialchars($item) . "</li>";
    }
    echo "</ul>";
} ?>