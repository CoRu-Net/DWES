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

               $dadol= rand(1,6);
   $dado2=rand(1,6);
   $suma = $dadol + $dado2;
   ?>
     <img src="img/<? echo $dadol; ?>.svg" alt="Dado 1">
     <img src="img/<?echo $dado2; ?>.svg" alt="Dado 2">
     <br> 
     <?php 
     if ($dadol == $dado2)  {
        echo "<h2>Has sacado una pareja de $dadol</h2>";
      } else {
        echo "<h2>No has sacado una pareja</h2>";
      }
?>
                    
            
       
    </body>

</html>