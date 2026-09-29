<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UD2_</title>
</head>

<body>
    <?php
    $saldo = "1000";

    $ingresos = 200;

    $saldo = intval($saldo);
    $saldo = $saldo + $ingresos;
    
    echo ($saldo > 1200) ? "Es vip" : "Es uncliente normal";





    ?>
</body>

</html>