<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscador de Videojuegos</title>
    <!-- Pico.css para formato moderno y minimalista -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
    <!-- Estilos personalizados -->
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <main class="container">
        <article class="formulario-card">
            <header>
                <h2>🎮 Catálogo de Videojuegos</h2>
                <p>Encuentra tus títulos favoritos utilizando los filtros de búsqueda.</p>
            </header>

            <form action="resultados.php" method="GET">
                <label for="titulo">
                    Título
                    <input type="text" id="titulo" name="titulo" placeholder="Ej: Mario, Zelda, Minecraft...">
                </label>

                <label for="genero">
                    Género
                    <select id="genero" name="genero">
                        <option value="">Todos</option>
                        <option value="Aventura">Aventura</option>
                        <option value="Carreras">Carreras</option>
                        <option value="Deportes">Deportes</option>
                    </select>
                </label>

                <label for="precio_max">
                    Precio máximo (€)
                    <input type="number" id="precio_max" name="precio_max" step="0.01" min="0" placeholder="Ej: 50.00">
                </label>

                <button type="submit">Buscar Videojuegos</button>
            </form>
        </article>
    </main>
</body>
</html>
