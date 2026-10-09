<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Actividad0</title>
</head>


<style>
    body {
        align-items: center;
        display: flex;
        flex-direction: column;
        background-color: #f0f0f0;
        font-family: Arial, sans-serif;
        padding-top: 50px;
    }

    /* 1. ESTE ES EL MARCO EXTERIOR GRUESO CON SOMBRA */
    .tarjeta-tabla {
        background-color: white;
        border: 4px solid #000000;
        width: fit-content;
        margin: 0 auto;
        padding: 20px 25px;
        text-align: left;

    }

    /* 2. EL TÍTULO PEGADITO */
    h2 {
        margin: 0 0 15px 0;
        font-size: 1.6rem;
        font-weight: bold;
    }


    table {
        border-collapse: collapse;
    }

    td {
        border: 2px solid #000000;
        padding: 8px 12px;
        text-align: center;
        font-size: 1.2rem;
    }
</style>

<body>
    <table>

        <?php

$productos = [
    [
        "nombre" => "Leche ",
        "precio" => 1.05,
        "iva"    => 1
    ],
    [
        "nombre" => "Pan ",
        "precio" => 0.85,
        "iva"    => 1
    ],
    [
        "nombre" => "Aceite de oliva",
        "precio" => 8.90,
        "iva"    => 2
    ],
    [
        "nombre" => "Agua mineral ",
        "precio" => 0.65,
        "iva"    => 1
    ],
    [
        "nombre" => "Ordenador ",
        "precio" => 699.00,
        "iva"    => 4
    ],
    [
        "nombre" => "Auriculares ",
        "precio" => 49.99,
        "iva"    => 4
    ],
    [
        "nombre" => "Libro ",
        "precio" => 24.90,
        "iva"    => 2
    ],
    [
        "nombre" => "Camiseta de algodón",
        "precio" => 15.95,
        "iva"    => 3
    ],
    [
        "nombre" => "Manzanas 1kg",
        "precio" => 2.30,
        "iva"    => 1
    ],
    [
        "nombre" => "Suscripción gimnasio",
        "precio" => 35.00,
        "iva"    => 4
    ]
];
$tipos_iva = [
    1 => 0,
    2 => 0.04,
    3 => 0.1,
    4 => 0.21
];
 echo"<tr><td>Producto</td><td>Precio sin IVA</td><td>Tipo de IVA</td><td>Precio con IVA</td></tr>";
foreach ($productos as $producto) {
    $precio_sin_iva = $producto["precio"];
    $precio_con_iva = $precio_sin_iva * (1 + $tipos_iva[$producto["iva"]]);
    echo "<tr>
    <td>". $producto["nombre"] . "</td>
    <td>" . $precio_sin_iva. "</td>
    <td>" . $producto["iva"] ."</td>
    <td>" . $precio_con_iva ."</td>
    </tr>";
}
?>
</body>
</table>

</html>