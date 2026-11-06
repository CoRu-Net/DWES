
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="pico.min.css">
    <title>Document</title>
</head>
<body>
  <main class="container">
    <article>
      <h1>Bienvenido</h1>
      <p>Contenido de tu página principal...</p>

      <?php if (isset($_COOKIE["cookies_aceptadas"])) { ?>
        <form method="post" action="votar.php">
          <button type="submit" name="borrar" value="1">
            🧹 Borrar cookies
          </button>
        </form>
      <?php } ?>
    </article>

    <?php if (!isset($_COOKIE["cookies_aceptadas"])) { ?>
      <div class="cookie-banner">
        <article>
          <header>
            <strong>Política de Cookies</strong>
          </header>
          <p>
            Usamos cookies para mejorar tu experiencia.
            Al continuar aceptas nuestra
            <a href="#" target="_blank" rel="noopener">Política de Cookies</a>.
          </p>
          <div>
            <form method="post" action="votar.php">
              <button type="submit" name="aceptar" value="1">
                Aceptar cookies
              </button>
            </form>
          </div>
        </article>
      </div>
    <?php } ?>
  </main>
</body>

</html>