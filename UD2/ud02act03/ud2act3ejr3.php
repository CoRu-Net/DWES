<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UD2_</title>
</head>

<body>
    <style>
        body {
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
            text-align: center;
            padding-top: 50px;
        }

        meter {
            width: 90px;
            height: 40px;
        }
    </style>

    <?php

    $a = rand(1, 3);

    $salida = match ($a) {

        1 => 'El número generado es: $a y en castellano es uno.',


        2 => 'El número generado es: $a y en castellano es dos.',


        3 => '>El número generado es: $a y en castellano es tres.',
    }
    


    ?>
</body>

</html>
