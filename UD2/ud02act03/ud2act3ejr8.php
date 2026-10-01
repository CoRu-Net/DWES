<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UD2_</title>
</head>

<body>

    <body>
        <style>
            body {
                background-color: #f0f0f0;
                font-family: Arial, sans-serif;
                padding-top: 50px;
            }
        </style>

        <div class="tarjeta-tabla">


            <?php
            $cantDados = rand(1, 5);
            $dadoMaspequeno = 7;
            for ($i = 0; $i < $cantDados; $i++) {
                $dado = rand(1, 6);
                if ($dado < $dadoMaspequeno) {
                    $dadoMaspequeno = $dado;
                }
                echo "<img src='img/$dado.svg' alt='Dado'>";
            
            }
            echo "<br><h2>El dado más pequeño es: $dadoMaspequeno</h2>";
            ?>
    
         



    </body>

</html>