<?php

function mayor(int ...$numeros): int 
{
   
    echo "<pre>";
    print_r($numeros);
    echo "</pre>";

    $numMayor = $numeros[0];
  
    foreach ($numeros as $num) {
        if ($num > $numMayor) {
            $numMayor = $num;
        }
    }

    return $numMayor;
}

$resultado = mayor(2, 3, 24, 1);

echo "El número mayor es " . $resultado;

?>