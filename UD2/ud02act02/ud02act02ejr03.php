<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UD2_</title>
</head>

<body>
    <?php
    $numero = 1;

    $resultado = $numero <=> 0;

    echo ($resultado === 1) ? "Es positivo" : (($resultado === -1) ? "Es negativo" : "Es cero");



    ?>
</body>

</html>