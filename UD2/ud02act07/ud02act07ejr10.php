<?php
$iva = 0.21;
$calcularPrecioFinal = fn(float $precioBase): float => $precioBase * (1 + $iva);

$precios = [100, 50, 19.99, 250];

echo "<h2>Cálculo de Precios con IVA (" . ($iva * 100) . "%)</h2>";
echo "<ul>";
foreach ($precios as $precioBase) {
    $precioFinal = $calcularPrecioFinal($precioBase);
    
    // Formateamos el precio a 2 decimales
    $precioFinalFormateado = number_format($precioFinal, 2, ',', '.');
    
    echo "<li>Precio final: <b>$precioBase : $precioFinalFormateado €</b></li>";
}

echo "</ul>";
?>