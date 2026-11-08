<?php
session_start();


if (isset($_SESSION['email'])) {
    header("Location: privado.php");
    exit();
}

$error = "";
$email_valido = "alumno@daw.es";
$password_valida = "123456";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');
    $password = trim($_POST['password'] ?? '');

    if (empty($email) || empty($password)) {
        $error = "Por favor, completa todos los campos.";
    } elseif ($email === $email_valido && $password === $password_valida) {

        $_SESSION['email'] = $email;
        header("Location: privado.php");
        exit();
    } else {
        $error = "Credenciales incorrectas. Inténtalo de nuevo.";
    }
}
?>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Login sencillo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="pico.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
<main class="container">
        <h1>Acceso al Sistema</h1>

        <?php if (!empty($error)): ?>
            <p style="color: red; font-weight: bold;">
                <?= htmlspecialchars($error) ?>
            </p>
        <?php endif; ?>
        <form method="post" action="">
            <label>
                Email:
                <input type="email" name="email" placeholder="Email" value="<?= htmlspecialchars($_POST['email'] ?? '') ?>">
            </label>
            <label>
                Contraseña:
                <input type="password" name="password" placeholder="contraseña">
            </label>
            <button type="submit">Entrar</button>
        </form>
        <p>
            <strong>Usuario de prueba:</strong> <em>alumno@daw.es</em><br>
            <strong>Contraseña:</strong> <em>123456</em>
        </p>
        <a href="privado.php">Acceso a Zona Privada (Sesión iniciada)</a>
    </main>

</body>

</html>