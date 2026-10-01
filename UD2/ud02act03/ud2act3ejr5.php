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

    echo "<br> Suma de numeros del 1 al 10<br>";
    $a = 1;
    $suma=0;
    while($a <= 10) {
    $suma += $a;
    $a++;
    }
     echo "<br> Suma de numeros del 1 al 10 es: $suma <br>";
    ?>
</body>

</html>