<?php include 'config.php';?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercici6</title>
</head>
<body> 
    <style>
        body{
            align-items: center;
            display: flex;
            flex-direction: column;
            background-color:#FFF4E5 ;
        }
        h1{
            padding: auto;
        }
    </style>
    <h1>Bienvenidos a mi sitio</h1>

<nav> 
    <a href="<?php echo (basename($_SERVER['PHP_SELF']) == 'act5_6.php') ? 'act5_6/about.php' : 'about.php'; ?>">Sobre mí</a>
    <a href="<?php echo (basename($_SERVER['PHP_SELF']) == 'act5_6.php') ? 'act5_6/contact.php' : 'contact.php'; ?>">Contacto</a>
    <a href="<?php echo (basename($_SERVER['PHP_SELF']) == 'act5_6.php') ? 'act5_6.php' : '../act5_6.php'; ?>">Inicio</a>
</nav>


</html>