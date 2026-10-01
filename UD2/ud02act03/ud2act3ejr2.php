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
    echo "Simulación de Calificación";
    echo "<br>";
    $a = rand(0, 10);
    echo "La nota generada es: $a";
    echo "<br>";
    echo "<br>";
    if ($a == 0 || $a < 5) {
        echo "Calificación; Insuficiente";
    } elseif ($a == 5 || $a < 6) {
        echo "Calificación; suficiente $a";
    } elseif ($a == 6 || $a < 7) {
        echo "Calificación: Bien";
    } elseif ($a == 7 || $a < 9) {
        echo "Calificación: Notable";
    } else {
        echo "Calificación: Sobresaliente";
    }

    ?>
</body>

</html>