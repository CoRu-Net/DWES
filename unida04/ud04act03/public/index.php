<?php

declare(strict_types=1);
require __DIR__ . '/../config.php';
require __DIR__ . '/../modelo/optionmodel.php';
require __DIR__ . '/../controlador/votecontroller.php';

use Modelo\OptionModel;
use Controlador\VoteController;

$pdo = new PDO(
  DB_DSN,
  DB_USER,
  DB_PASS,
  [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);

$modelo = new OptionModel($pdo);
$controlador = new VoteController($modelo);
$data = $controlador->procesar();
require __DIR__ . '/../vista/voteview.php';
?>
