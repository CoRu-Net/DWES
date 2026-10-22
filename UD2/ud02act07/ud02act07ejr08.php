<?php
function dividir( $dividendo,  $divisor = 4): float|string
{
    if ($divisor == 0.0) {
        return "Error: No es posible dividir entre cero.";
    }
     return $dividendo / $divisor;
}
echo "La división de 3 entre 4 es: " . dividir(3, 4) . "<br>";

echo "La división de 6 entre 0 es: " . dividir(6, 0) . "<br>";
echo "La división de 6 entre 4 (valor por defecto, porque no he indicado el divisor) es: " . dividir(6) . "<br>";
?>