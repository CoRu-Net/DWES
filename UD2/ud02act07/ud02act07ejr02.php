<?php

function arrayAleatorio(int $tam, int $min, int $max): array
{
    $array = [];
    for ($i = 0; $i < $tam; $i++) {
        $array[] = rand($min, $max);
    }
    return $array;
}

$resultado = arrayAleatorio(5, 1, 10);

echo "<pre>";
print_r($resultado);
echo "</pre>";

?>