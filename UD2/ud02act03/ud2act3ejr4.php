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

    echo "<br> Numeros pares del 0 al 50 <br>";

    for ($i = 0; $i <= 50; $i += 2) {
        echo ".$i <br>";
    }

    ?>
</body>

</html>