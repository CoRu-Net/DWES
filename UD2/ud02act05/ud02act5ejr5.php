<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Actividad05</title>

</head>


<style>
    body {
        background-color: #f0f0f0;
        font-family: Arial, sans-serif;
        padding-top: 50px;
    }

    h2 {
        margin: 0 0 15px 0;
        font-size: 1.6rem;
        font-weight: bold;
    }

    table {
        border-collapse: collapse;
        margin-bottom: 30px;
    }


    td {
        border: 2px solid #000000;
        padding: 8px 12px;
        text-align: center;
        font-size: 1.2rem;
        font-weight: bold;
    }


    th {
        border: 2px solid #000000;
        padding: 8px 12px;
        text-align: center;
        font-size: 1.2rem;
        font-weight: normal;
    }
</style>

<body>
    <?php
    $producto =  [        
                ["nombre" => "camiseta","precio"  => 15.00],
                ["nombre" => "pantalon" ,"precio"=>   35.00],
                ["nombre" => "zapatos","precio" =>  50.00,],
                ["nombre" => "gorra" , "precio" =>  10.00
            ]];
    
    echo "<h3>Ejercicio 5 — Filtrar productos caros</h3>";
     echo "<h3>Lista completa de productos</h3>";
    echo "<table>";
    echo "<tr><td>producto</td><td>precio (€)</td></tr>";
    foreach ($producto as $o) {
        $Formateado = number_format($o['precio'], 2, ',', '.');
        echo "<tr>
        <th>" . $o['nombre'] . "</th>
         <th>" . $Formateado . "</th>
        </tr>";
    }
    echo "</table>";
    function masVeinte($producto){
        return($producto["precio"] > 20);
    } 
    $filtrado = array_filter($producto,"masVeinte");
    echo "</table>";
    echo "<h3>Productos con precio superior a 20 €</h3>";

    echo "<table>";
    echo "<tr><td>producto</td><td>precio (€)</td></tr>";
        foreach($filtrado as $a){
         $Formateado = number_format($a['precio'], 2, ',', '.');
        echo "<tr>
        <th>" . $a['nombre'] . "</th>
         <th>" . $Formateado . "</th>
        </tr>";
    }

    echo "</table>";



  
    ?>
    </table>
</body>

</html>