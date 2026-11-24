<?php
declare(strict_types=1);
require __DIR__ . '/../config.php';
require __DIR__ . '/../modelo/optionModel.php';
require __DIR__ . '/../controlador/voteController.php';
use Modelo\OptionModel;
use Controlador\VoteController;
$pdo = new PDO(DB_DSN, DB_USER, DB_PASS, 
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);
$modelo = new OptionModel($pdo);
$controlador = new VoteController($modelo);
$data = $controlador->procesar();
require __DIR__ . '/../vista/voteView.php';
?>
<!DOCTYPE html>
<html lang="es"><head>
      <meta charset="utf-8"><title>Votaciones simples</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
  </head>
  <body>
    <main class="container">
      <h1>🗳️ Votaciones</h1>
      <h4 style="color:chocolate"></h4>
        <form method="post">
                    <button disabled=""> Votar</button> <small>Total: 0</small>
        </form>

<h3>Resultados</h3>
<table>
  <tbody><tr><th>Opción</th><th>Votos</th><th>%</th><th>Eliminar</th></tr>
  </tbody></table>

<h3>➕ Nueva opción</h3>
<form method="post">
  <input name="texto" placeholder="Nueva opción..." required="">
  <button>Agregar opción</button>
</form>
</main>
</body></html>