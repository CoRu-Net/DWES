<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Actividad06</title>
    <h2>Números con colores</h2>
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
        $numeros = array();

        for ($i = 0; $i < 10; $i++) {
            $numeros[$i] = rand(1, 100);
        }
        foreach ($numeros as $val) {

            $clase = ($val % 2 == 0) ? 'par' : 'impar';

            echo "<td class='$clase'>$val</td>";
        }
        ?>
    </table>
</body>

</html>