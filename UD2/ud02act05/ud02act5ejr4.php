<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Actividad4</title>

</head>


<style>
    body {
        background-color: #f0f0f0;
        font-family: Arial, sans-serif;

    }

    h2 {
        margin: 0 0 8px 0;
        font-size: 1.6rem;
        font-weight: bold;
        
    }

    table {
        border-collapse: collapse;
     
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
    <table>
        <?php
    $obligatorio = array('nombre' => "Ana", 'email' => "ana@gmail.com", 'edad' => "25", 'telefono' => "676554423");
    $usuario = array('nombre' => "Ana", 'edad' => "25");

    echo "<h3>Campos obligatorios</h3>";
    $clave = array_keys($obligatorio);
    echo "<table>";
    echo "<tr><td>campo</td></tr>";
    foreach ($clave as $obligacion) {
        echo "<tr><th>$obligacion</th></tr>";
    }
    echo "</table>";

    echo "<h3>Campos enviados por el usuario</h3>";
    echo "<table>";
    echo "<tr><td>campo</td><td>valor</td></tr>";
    function comprobante($value, $key)
    {
        echo "<tr><th>$key</th><th>$value</th></tr>";
    }
    array_walk($usuario, "comprobante");
    echo "</table>";

    echo "<h3>Campos faltantes</h3>";
    $faltantes= array_intersect_assoc($obligatorio ,$usuario);
    foreach($faltantes as $s){
   echo "<ul><li style='color: red;'>$s</il></ul>";
    }

        ?>
    </table>
</body>

</html>