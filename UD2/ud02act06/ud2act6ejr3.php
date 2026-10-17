

<?php
$texto = "PHP es fantástico. Con PHP puedes construir sitios dinámicos. PHP mola.";
$termino = "PHP";

$longitudTermino = strlen($termino);
$longitud = strlen($termino);
$posicion = 0;
$resultado = "";

while (($encontrado = strpos($texto, $termino, $posicion)) !== false) {

    $resultado .= substr($texto, $posicion, $encontrado - $posicion);

    $resultado .= "<mark>" . substr($texto, $encontrado, $longitud) . "</mark>";

    $posicion = $encontrado + $longitud;
}

$resultado .= substr($texto, $posicion);

echo "<strong>Texto:</strong> " . $texto . "<br>";
echo "<br>";
echo "<strong>Término:</strong> " . "<mark>" . $termino . "</mark>". "<br>";
echo "<br>";
echo "<strong>Resultado:</strong> " . $resultado . "<br>";
?>

