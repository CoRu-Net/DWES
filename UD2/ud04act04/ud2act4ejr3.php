<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Actividad03</title>
</head>
<h1> Personas</h1>

<style>
    body {
        align-items: center;
        display: flex;
        flex-direction: column;
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

<body>
    <table>
        <?php
       
        $personas = array();
        $resultado = array("M" => 0, "F" => 0);

        for ($a = 0; $a < 5; $a++) {
            $numero = rand(0, 1);
            if ($numero == 0) {
                $personas[$a] = "M";
            } else {
                $personas[$a] = "F";
            }
        }
        echo "<tr><th>#</th><th>Sexo</th></tr>";
        foreach ($personas as $i => $sexo) {
            $numero_lista = $i + 1;
            echo "<tr><td>$numero_lista</td><td>$sexo</td></tr>";
        }
       echo "</table>";
       echo"<br>";
        print_r(array_count_values($personas));

        ?>  
</body>
</table>

</html>