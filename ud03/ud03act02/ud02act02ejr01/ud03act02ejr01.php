<?php
$color_fondo= $_COOKIE['color']??'#ffffff';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pico.min.css">
    <title>Document</title>
</head>

<body style="background-color: <?= htmlspecialchars($color_fondo) ?>;">
    <main class="container">
        <h1>Selecciona un color de fondo</h1>
        
        <form method="post" action="procesar.php">
            <select name="color">
                <option value="#FF0000">Rojo</option>
                <option value="#FFFFFF">Blanco</option>
                <option value="#00FF00">Verde</option>
                <option value="#0000FF">Azul</option>
                <option value="#FFFF00">Amarillo</option>
                <option value="#FFA500">Naranja</option>
                <option value="#FFC0CB">Rosa</option>
            </select>
            <input type="submit" value="Cambiar color">
        </form>
        <p>El color elegido se guardará en una <b>cookie durante 24 horas</b> 🍪</p>


    </main>
</body>

</html>