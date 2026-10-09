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

        $caras = array();
        $cantidadCaras = rand(1, 10);
        for ($i = 0; $i < $cantidadCaras; $i++) {
            $caras[] = rand( 128512 , 128580);
        }
        echo "<p>";
        foreach ($caras as $i) {
            
            echo "&#$i";
        }
        echo "</p>";
       
       $caraAleatoria = rand( 128512 , 128580);
       echo "<p>Elegido: &#$caraAleatoria</p>";
        if (in_array($caraAleatoria, $caras)) {
            echo "<p>La cara elegida está en el Grupo.</p>";
        } else {
            echo "<p>La cara elegida NO está en el grupo.</p>";
        }
       

        ?>
    </table>
</body>

</html>