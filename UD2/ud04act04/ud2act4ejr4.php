<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Actividad01</title>
</head>


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
        border: 2px solid #000000;
        padding: 8px 12px;
        text-align: center;
        font-size: 1.2rem;
    }
</style>

<body>
    <table>

        <?php

        $array = range(0, 100);
        //Extraemos 3 índices de forma aleatoria con array_rand() y los guardamos en un array 
        $indices_azar = array_rand($array, 3);

        $num1 = $array[$indices_azar[0]];
        $num2 = $array[$indices_azar[1]];
        $num3 = $array[$indices_azar[2]];

        $media = ($num1 + $num2 + $num3) / 3;;
        $resultado = round($media, 1);
        echo "<tr><td>La media de $num1, $num2 y $num3 es $resultado</td></tr>";

        ?>
</body>
</table>

</html>