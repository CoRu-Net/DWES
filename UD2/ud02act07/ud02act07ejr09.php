<?php
$visitas=0;
function aumentarVisitas(&$visitas){
  $visitas ++;
}
aumentarVisitas($visitas);
echo "El número de visitas ha aumentado a $visitas";
?>