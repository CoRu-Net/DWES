<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Votaciones simples</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
</head>

<body>
    <main class="container">
        <h1>🗳️ Votaciones</h1>
        <!-- 1. Mostramos el mensaje que viene del controlador -->
        <h4 style="color:chocolate"><?= $data['mensaje'] ?></h4>
        <!-- 2. Formulario para votar -->
        <form method="post">
            <?php foreach ($data['opciones'] as $op): ?>
                <label>
                    <input type="radio" name="votar" value="<?= $op['id'] ?>" required>
                    <?= $op['opcion'] ?>
                </label>
            <?php endforeach; ?>
            <button <?= empty($data['opciones']) ? 'disabled' : '' ?>>Votar</button>
            <small>Total: <?= $data['total'] ?></small>
        </form>
        <!-- 3. Tabla de resultados y botón de eliminar -->
        <h3>Resultados</h3>
        <table>
            <tbody>
                <tr>
                    <th>Opción</th>
                    <th>Votos</th>
                    <th>%</th>
                    <th>Eliminar</th>
                </tr>
                <?php foreach ($data['opciones'] as $op): ?>
                    <?php
                    if ($data['total'] > 0) {
                        $porcentaje = round(($op['votos'] * 100) / $data['total'], 1);
                    } else {
                        $porcentaje = 0;
                    }
                    ?>
                    <tr>
                        <td><?= $op['opcion'] ?></td>
                        <td><?= $op['votos'] ?></td>
                        <td><?= $porcentaje ?>%</td>
                        <td>
                            <form method="post">
                                <button name="eliminar" value="<?= $op['id'] ?>">❌</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <!-- 4. Formulario para agregar nueva opción -->
        <h3>➕ Nueva opción</h3>
        <form method="post">
            <input name="texto" placeholder="Nueva opción..." required>
            <button>Agregar opción</button>
        </form>
    </main>
</body>

</html>