<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UD2_</title>
</head>

<body>
    <?php

$precio1 = 30;
$precio2 = 30;
$comparador = $precio1 <=> $precio2;
echo ($comparador === -1) 
    ? "El producto 1 es más barato" 
    : (($comparador === 1) 
    ? "El producto 1 es más caro" : "Ambos productos cuestan lo mismo");


    ?>
</body>

</html>