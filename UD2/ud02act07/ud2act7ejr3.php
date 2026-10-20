<?php
 $resultad = array();

for($a=0; $a< 4; $a++){
    
    $resultado [$a] = rand(1,20);
}
echo "Original :";
echo "<BR>";
echo "<pre>";
 print_r($resultado) ;
 echo "</pre>";
echo "<BR>";
 function arrayMayores(array &$array): array {
    return array_values(array_filter($array, fn($numero) => $numero > 10));
}
$filtrado =  arrayMayores($resultado);
echo "Filtrado: ";
echo "<pre>";
print_r($filtrado);
echo "</pre>";
?>