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
   $nivel= rand(0,100);
   printf("NIVEL: %d%%" ,$nivel);
   
   ?>
     <br>       
 <meter min="0" max="100" value="<?php echo $nivel; ?>">
    <?php echo $nivel; ?>%
</meter>

</body>
</html>