<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Actividad02</title>

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
    <table>
        <?php

        $empleados = [
            [
                "nombre" => "Ana",
                "departamento" => "Ventas",
                "estado" => "activo"
            ],
            [
                "nombre" => "Luis",
                "departamento" => "IT",
                "estado" => "inactivo"
            ],
            [
                "nombre" => "Marta",
                "departamento" => "Marketing",
                "estado" => "activo"
            ]
        ];

        echo "<h2>Empleados</h2>";
        echo "<tr>
        
    <td>Nombre</td><td>Departamento</td><td>Estado</td>
    </tr>";
        foreach ($empleados as $personas) {
            echo  "<tr>
     <th>" . $personas["nombre"] . " </th>";
            echo  "
     <th>" . $personas["departamento"] . " </th>";
            echo  "
     <th>" . $personas["estado"] . " </th></tr>";
        }
        echo "</table>";

        echo "<BR>";

        echo "<h2>Empleados activos </h2>";


        //$empleActivo = array_filter($empleados, fn($filtro) => $filtro["estado"] === "activo");
        function empleActivo($empleados)
        {
            return ($empleados["estado"] === "activo");
        }
        $activo = array_filter($empleados, "empleActivo");
        echo "<table>";
        echo "<td>Nombre</td><td>Departamento</td><td>Estado</td>";
        foreach ($activo as $a) {
            echo  "<tr>
     <th>" . $a["nombre"] . " </th>";
            echo  "
     <th>" . $a["departamento"] . " </th>";
            echo  "
     <th>" . $a["estado"] . " </th></tr>";
        }

        ?>
    </table>
</body>

</html>