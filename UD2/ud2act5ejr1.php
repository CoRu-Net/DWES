
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Actividad01</title>
</head>
  <h1>Alturas de personas</h1>

          <style>
            body {
                background-color: #f0f0f0;
                font-family: Arial, sans-serif;
                padding-top: 50px;
            }

            /* 1. ESTE ES EL MARCO EXTERIOR GRUESO CON SOMBRA */
            .tarjeta-tabla {
                background-color: white;
                border: 4px solid #000000;
                width: fit-content;
                margin: 0 auto;
                padding: 20px 25px;
                text-align: left;
  
            }

            /* 2. EL TÍTULO PEGADITO */
            h2 {
                margin: 0 0 15px 0;              
                font-size: 1.6rem;
                font-weight: bold;
            }


            table {                
                border-collapse: collapse;
            }

            td {               
                border: 1px solid #000000;
                padding: 8px 12px;
                text-align: center;
                font-size: 1.2rem;
            }
  </style>
<?php
$ropa1 = ['camisa', 'pantalón', 'zapatos'];
$ropa2 = [ 'gorra', 'bufanda','camisetas'];
$ropa_unida = array_merge($ropa1, $ropa2);
$ordenado = sort($ropa_unida);
echo "<h3>Proveedor 1</h3>";
echo "<ul>";
foreach($ropa1 as $primero){
   echo "<li>$primero</li>";
}
echo "</ul>";
echo "<ul>";
echo "<h3>Proveedor 2</h3>";
foreach($ropa2 as $segundo){
   echo "<li>$segundo</li>";
}
echo "</ul>";
echo "<h3>Proveedor 3</h3>";
echo "<ul>";
foreach($ropa_unida as $orden){
echo "<li>$orden</li>";
}
echo "</ul>";


?>