<?php
require_once __DIR__ . '/app/interfaces/detalleinterface.php';
require_once __DIR__ . '/app/models/producto.php';
require_once __DIR__ . '/app/models/productofisico.php';
require_once __DIR__ . '/app/models/productodigital.php';
require_once __DIR__ . '/app/models/cliente.php';
require_once __DIR__ . '/app/models/pedido.php';

use app\models\Cliente;
use app\models\Pedido;
use app\Models\ProductoFisico;
use app\models\ProductoDigital;

$cliente1 = new Cliente("Ana López", "ana@example.com");
$cliente2 = new Cliente("Carlos Pérez", "carlos@example.com");

$prod1 = new ProductoFisico("TV123", 499.99, 10);
$prod2 = new ProductoDigital("EBOOK456", 9.99, 2);
$prod3 = new ProductoDigital("GAME42", 59.99, 10);
$prod4 = new ProductoFisico("LAPTOP88", 899.50, 2.5);

$pedido1 = new Pedido($cliente1);
$pedido1->agregarProducto($prod1);
$pedido1->agregarProducto($prod2);
$pedido1->agregarProducto($prod3);


$pedido2 = new Pedido($cliente2);
$pedido2->agregarProducto($prod4);
$pedido2->agregarProducto($prod2);
?>

<html lang="es" data-theme="light"><head>
  <meta charset="UTF-8">
  <title>Resumen de pedidos</title>
  <!-- Cargar Pico.css desde CDN -->
  <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@latest/css/pico.min.css">
</head>
<body>
  <main class="container">
    <h1>🛒 Resumen de pedidos</h1>

          <article>
        <p> <?= $pedido1->mostrarDetalle()?></p>
        <p> <?= $pedido2->mostrarDetalle() ?> </p>
      </article>
      </main>


</body></html>