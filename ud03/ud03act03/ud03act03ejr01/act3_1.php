<?php
 session_start();
 if (!isset($_SESSION['votosA'])) {
    $_SESSION['votosA'] = 0;
}
if (!isset($_SESSION['votosB'])) {
    $_SESSION['votosB'] = 0;
}
?>
<!DOCTYPE html>
<html lang="en">
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Votación con meter (contador directo)</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="pico.min.css">
</head>
<body>
    
<main class="container">
  <h1>Votación</h1>

  <p><strong>Opción A:</strong> <?= $_SESSION['votosA'] ?> votos — 
     <strong>Opción B:</strong> <?= $_SESSION['votosB'] ?> votos</p>

  <form action="votar.php" method="post" class="grid">
    <button type="submit" name="opcion" value="A">Votar A</button>
    <button type="submit" name="opcion" value="B">Votar B</button>
    <button type="submit" name="borrar" value="borrar" class="secondary">Poner a cero</button>
  </form>

  <h2>Resultados</h2>

  <p>
    <label for="mA">Opción A</label>
    <meter id="mA" min="0" max="20" value="<?= $_SESSION['votosA'] ?>"></meter>
  </p>

  <p>
    <label for="mB">Opción B</label>
    <meter id="mA" min="0" max="20" value="<?= $_SESSION['votosB'] ?>"></meter>

  <p class="muted">Escala máxima: 20 votos</p>
</main>


</body></html>