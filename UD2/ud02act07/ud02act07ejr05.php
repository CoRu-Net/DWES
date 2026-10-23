<?php

function digitoN(int $num, int $pos): int
{
    $numStr = (string) abs($num);
    return (int) $numStr[$pos - 1];
}

$numero = 2674;
$posicion = 3;

$digito = digitoN($numero, $posicion);

echo "<h1>El número es $numero y la posicion que pido es la $posicion</h1>";
echo "<h1>En esa posición está el $digito</h1>";

?>