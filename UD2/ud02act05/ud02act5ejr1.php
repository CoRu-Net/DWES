<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Actividad01</title>
</head>


<style>
    body {
        align-items: flex-start;
        background-color: #f0f0f0;
        font-family: Arial, sans-serif;
       
    }
ul {
    display: block;
    list-style-type: disc;
    margin-block-start: 0.5em;
    margin-block-end: 0.5em;
    padding-inline-start: 40px;
    unicode-bidi: isolate;
}

</style>

<body>
    <?php
    $proveedor = array('Camiseta', 'Pantalón', 'Zapatos');
    $proveedor2 = array('Bufanda', 'Camiseta', 'Gorra');
    echo "<h3>Proveedor 1</h3>";
    foreach ($proveedor as $producto) {
        echo "<ul>
           <li>$producto</li>
           </ul>";
    }
    echo "<h3>Proveedor 2</h3>";
    foreach ($proveedor2 as $producto) {
        echo "<ul>
           <li>$producto</li>
           </ul>";
    }
    
    $unico = array_unique(array_merge($proveedor, $proveedor2));
    $ordenado = array_values($unico);
    echo "<h3>Proveedor 3</h3>";
    foreach ($ordenado as $producto) {
        echo "<ul>
           <li>$producto</li>
           </ul>";
    }
    ?>

</html>