<?php
echo"<strong> URL:</strong> " . $texto = 'http://www.linkfred.com/carpeta1/index.php' ;
echo "<BR>";
$separado = explode("/", $texto);
$longitud = count($separado);
$final  = $separado[$longitud - 1];
echo "<strong>". $final . "</strong>";
?>