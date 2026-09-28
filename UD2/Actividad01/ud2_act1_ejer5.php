<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FC</title>
</head>
<body>
    <style>
        body {
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
            text-align: center;
            padding-top: 50px;
        }
        meter{
           width: 90px;
           height: 40px; 
        }
       </style> 
    
   <?php 
   $dadol= rand(1,6);
   $dado2=rand(1,6);
   $suma = $dadol + $dado2;
   ?>
     <img src="img/<?= $dadol; ?>.svg" alt="Dado 1">
     <img src="img/<?= $dado2; ?>.svg" alt="Dado 2">
     <br> 
     <?php  printf("total de puntos: %d" ,$suma); ?>
   
    


</body>
</html>