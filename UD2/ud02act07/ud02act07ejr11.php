<?php
function generaMatrizCartasRand(int $n): array
{
    $palos = ['c', 'd', 'p', 't'];
    $cartas = [];

    for ($i = 0; $i < $n; $i++) {
        $paloAleatorio = $palos[array_rand($palos)];
        $numeroAleatorio = rand(1, 13);
        $cartas[] = $paloAleatorio . $numeroAleatorio;
    }

    return $cartas;
}


$numCartas = rand(5, 10);

// 2. Generamos el array con las cartas
$baraja = generaMatrizCartasRand($numCartas);

// 3. Mostramos la cabecera
echo "<h2>$numCartas cartas</h2>";

// 4. Renderizamos las imágenes SVG en fila desde la carpeta img/
foreach ($baraja as $carta) {
    echo "<img src='img/$carta.svg' alt='$carta' width='110' style='margin-right: 4px;'>";
}
?>