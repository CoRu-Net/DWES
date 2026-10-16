<?php
$nombreCompleto = "Ana María Lopez Perez";
echo "<strong>Nombre completo:</strong> " . "$nombreCompleto";
echo "<BR>";

$separado =  explode(" ", $nombreCompleto);

$contador = count($separado);

if($contador == 4){
$nombre = $separado[0] . " " . $separado[1];
$apellido = $separado[2];
$apellido2 = $separado[3];
} else {
$nombre = $separado[0];
$apellido = $separado[1];
$apellido2 = $separado[2];
}



echo "<BR>";
echo "<strong> Nombre:</strong> $nombre ";
echo "<BR>";
echo "<strong> Primer apellido</strong> $apellido";
echo "<BR>";
echo "<strong> Segundo apellido </strong>$apellido2" ;
echo "<BR>";
echo "<strong>Iniciales</strong>  ";
foreach($separado as $palabras){
   $iniciales= substr($palabras, 0 ,1 );
    echo $iniciales. ".";
}
?>