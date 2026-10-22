<?php

 require __DIR__. "/ud02act07ejr6.php";
$a = 40;
$b = 3;
$nombresFunciones = ['sumar', 'resta', 'multiplicar', 'dividir'];

$ejecutar = function(string $nombreFuncion, int $num1, int $num2) {
    return $nombreFuncion($num1, $num2); 
};

echo "<h2>Resultados operando con $a y $b:</h2>";
echo "<ul>";
 foreach($nombresFunciones as $nombre){
    $resultado= $ejecutar($nombre,$a, $b);
 echo "
 <li>$nombre : $resultado </li>
 ";
 }


?>