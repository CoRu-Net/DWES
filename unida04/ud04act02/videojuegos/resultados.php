<?php
require_once 'conexion.php';
require_once 'videojuego.php';


$titulo = trim($_GET['titulo'] ?? '');
$genero = trim($_GET['genero'] ?? '');
$precio_max = trim($_GET['precio_max'] ?? '');


$sql = "SELECT * FROM videojuegos";
$condiciones = [];


if ($titulo !== '') {
    $condiciones[] = "titulo LIKE :titulo";
}

if ($genero !== '' && $genero !== 'Todos') {
    $condiciones[] = "genero = :genero";
}

if ($precio_max !== '' && is_numeric($precio_max)) {
    $condiciones[] = "precio <= :precio_max";
}

if (!empty($condiciones)) {
    $sql .= " WHERE " . implode(" AND ", $condiciones);
}


$stmt = $pdo->prepare($sql);

if ($titulo !== '') {
    $paramTitulo = "%" . $titulo . "%";
    $stmt->bindParam(':titulo', $paramTitulo, PDO::PARAM_STR);
}

if ($genero !== '' && $genero !== 'Todos') {
    $stmt->bindParam(':genero', $genero, PDO::PARAM_STR);
}

if ($precio_max !== '' && is_numeric($precio_max)) {
    $stmt->bindParam(':precio_max', $precio_max);
}

$stmt->execute();


$videojuegos = $stmt->fetchAll(PDO::FETCH_CLASS, 'Videojuego');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados de la búsqueda</title>
    <!-- Pico.css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
    <!-- Estilos personalizados -->
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <main class="container">
        <article class="resultados-card">
            <header>
                <h2>📋 Resultados de la Búsqueda</h2>
            </header>

            <?php if (!empty($videojuegos)): ?>
                <figure>
                    <table>
                        <thead>
                            <tr>
                                <th scope="col">Código</th>
                                <th scope="col">Título</th>
                                <th scope="col">Plataforma</th>
                                <th scope="col">Género</th>
                                <th scope="col">Precio</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($videojuegos as $juego): ?>
                                <tr>
                                    <td><strong><?= htmlspecialchars($juego->generarCodigo()) ?></strong></td>
                                    <td><?= htmlspecialchars($juego->getTitulo()) ?></td>
                                    <td><?= htmlspecialchars($juego->getPlataforma()) ?></td>
                                    <td><?= htmlspecialchars($juego->getGenero()) ?></td>
                                    <td><?= number_format($juego->getPrecio(), 2, '.', '') ?> €</td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </figure>
            <?php else: ?>
                <div class="mensaje-alerta">
                    <p>No se han encontrado videojuegos que coincidan con los criterios de búsqueda.</p>
                </div>
            <?php endif; ?>

            <div class="volver-enlace">
                <a href="index.php" role="button" class="secondary">Volver al formulario</a>
            </div>
        </article>
    </main>
</body>
</html>
