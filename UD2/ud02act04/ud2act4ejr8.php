<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Actividad08</title>
    
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
    p {
        font-size: 2rem;
        margin: 10px 0;
    }

    .par {
        color: blue;
    }

    .impar {
        color: red;
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

        $bolas = array();
        $cantidadBolas = rand(1, 15);

        for ($i = 0; $i < $cantidadBolas; $i++) {
            $bolas[] = rand(1, 10);
        }


        echo "Entre estas $cantidadBolas bolas... ";
        echo "<br>";
        echo "<p>";
        foreach ($bolas as $i) {
            $unicode = 10101 + $i;
            echo "&#$unicode; ";
        }
        echo "</p>";
        $bolas_unicas = array_unique($bolas);
        $cantidad_unicas = count($bolas_unicas);
        echo "<br>";

        echo "  ...hay $cantidad_unicas bolas distintas";
        echo "<p>";
        foreach ($bolas_unicas as $valor) {
            $unicode = 10101 + $valor;
            echo "&#$unicode; ";
        }
        echo "</p>";
        ?>
    </table>
</body>

</html>