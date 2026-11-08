<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Área Privada</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="pico.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="login-container">
        <article>
            <header>
                <h2>Área Privada</h2>
            </header>
            <p>¡Te encuentras en una zona secreta!, solo visible por una persona identificada.</p>
            <p>
                <a href="cerrar-sesion.php" role="button" class="secondary">Cerrar sesión</a>
            </p>
        </article>
    </main>
</body>
</html>