<?php
$errores = [];
$nombre = trim($_POST['nombre'] ?? '');
$email  = trim($_POST['email'] ?? '');
$url    = trim($_POST['url'] ?? '');
$sexo   = $_POST['sexo'] ?? '';
$convivientes = $_POST['convivientes'] ?? '';
$aficiones    = $_POST['aficiones'] ?? [];
$menu         = $_POST['menu'] ?? '';

if (empty($nombre)) {
    $errores[] = "El campo 'Nombre y apellidos' no puede estar vacío.";
} elseif (mb_strlen($nombre) > 60) {
    $errores[] = "El campo 'Nombre y apellidos' no puede superar los 60 caracteres.";
}

if (empty($email)) {
    $errores[] = "El campo 'Email' es obligatorio.";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errores[] = "Email obligatorio y con formato válido (ej: usuario@dominio.com).";
}

if (empty($url)) {
    $errores[] = "El campo 'URL' es obligatorio.";
} elseif (!filter_var($url, FILTER_VALIDATE_URL)) {
    $errores[] = "El formato de la URL no es válido (ej: https://ejemplo.com).";
}

if (empty($sexo)) {
    $errores[] = "Debes seleccionar un género.";
}

if ($convivientes === '' || !is_numeric($convivientes)) {
    $errores[] = "El número de convivientes es obligatorio.";
}
if (empty($aficiones)) {
    $errores[] = "Selecciona al menos una afición.";
}
if (empty($menu)) {
    $errores[] = "Selecciona al menos un menu.";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pico.cyan.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <?php if (!empty($errores)): ?>
        <article style="border-left: 4px solid #e53935;">
            <h2>Han ocurrido los siguientes errores:</h2>
            <ul>
                <?php foreach ($errores as $error): ?>
                    <li><?= htmlspecialchars($error) ?></li>
                <?php endforeach; ?>
            </ul>
            <a href="ud03act01ejer01.php" role="button" class="secondary">Volver al formulario</a>
        </article>

    <?php else: ?>
<article style="border-left: 4px solid #4caf50;">
        <h2>Resumen de datos introducidos</h2>

        <table>
            <tbody>
                <tr>
                    <td><strong>Nombre y Apellidos</strong></td>
                    <td><?= htmlspecialchars($nombre) ?></td>
                </tr>
                <tr>
                    <td><strong>Email</strong></td>
                    <td><?= htmlspecialchars($email) ?></td>
                </tr>
                <tr>
                    <td><strong>Página Web</strong></td>
                    <td><?= htmlspecialchars($url) ?></td>
                </tr>
                <tr>
                    <td><strong>Sexo</strong></td>
                    <td><?= htmlspecialchars($sexo) ?></td>
                </tr>
                <tr>
                    <td><strong>Número de convivientes</strong></td>
                    <td><?= htmlspecialchars($convivientes) ?></td>
                </tr>
                <tr>
                    <td><strong>Aficiones</strong></td>
                    <td><?= htmlspecialchars(implode(", ", $aficiones)) ?></td>
                </tr>
                <tr>
                    <td><strong>Menú favorito</strong></td>
                    <td><?= htmlspecialchars($menu) ?></td>
                </tr>
            </tbody>
        </table>
            <a href="ud03act01ejer01.php" role="button" class="secondary">Volver al formulario</a>
        </article>
    <?php endif; ?>
</body>

</html>