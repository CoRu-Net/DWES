<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Actividad08</title>

</head>


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

    p {
        display: flex;
        size: 0.3 rem;
        flex-wrap: wrap;
        ;
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

        $dados = [
            "img/1.svg",
            "img/2.svg",
            "img/3.svg",
            "img/4.svg",
            "img/5.svg",
            "img/6.svg"
        ];

        $numeroDados = array();
        $tirada = rand(2, 7);
        echo "tirada de  $tirada dados: ";

        for ($i = 0; $i < $tirada; $i++) {
            $numeroDados[] = rand(0, 5);
        }

        echo "<p>";
        foreach ($numeroDados as $a) {
            echo "<img src='{$dados[$a]}' alt='Dado'>";
        }
        echo "</p>";
        echo "<br>";
        sort($numeroDados);
        echo "tirada ordenada: ";

        echo "<p>";
        foreach ($numeroDados as $e) {
            echo "<img src='{$dados[$e]}' alt='Dado'>";
        }
        echo "</p>";





        ?>
    </table>
</body>

</html>