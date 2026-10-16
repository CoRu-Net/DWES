

<?php
$texto = "PHP es fantástico. Con PHP puedes construir sitios dinámicos. PHP mola.";
$termino = "PHP";

$longitudTexto = strlen($texto);
$longitudTermino = strlen($termino);

$resultado = "";
$posicion = 0;

if ($longitudTermino > 0) {
    while ($posicion < $longitudTexto) {
        $encontrado = strpos($texto, $termino, $posicion);

        // Si no hay más coincidencias, se añade el resto del texto
        if ($encontrado === false) {
            $resultado .= substr($texto, $posicion);
            break;
        }

        // Texto anterior a la coincidencia
        if ($encontrado > $posicion) {
            $resultado .= substr($texto, $posicion, $encontrado - $posicion);
        }

        // Coincidencia resaltada
        $resultado .= "<mark>" . substr($texto, $encontrado, $longitudTermino) . "</mark>";

        // Avanzar después de la coincidencia
        $posicion = $encontrado + $longitudTermino;
    }
} else {
    $resultado = $texto;
}

echo "<strong>Texto:</strong> " . $texto . "<br>";
echo "<br>";
echo "<strong>Término:</strong> " . $termino . "<br>";
echo "<br>";
echo "<strong>Resultado:</strong> " . $resultado . "<br>";
?>

