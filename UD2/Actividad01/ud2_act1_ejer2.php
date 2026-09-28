<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <style>
        body {
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
            text-align: center;
            padding-top: 50px;
        }
        p {
            font-family: 'Libre Baskerville', serif;
            color: #c42020;
            font-size: 35px;
            line-height: 1.6;
        }
    </style>
    
   <?php 
   $a = rand(0,100);
   $b =rand(0,100);
    echo '<p>';
   printf("La media aritmetia de %d y %d  es %d", $a, $b, ($a + $b) / 2);
    echo '</p>';
   ?>
</body>
</html>