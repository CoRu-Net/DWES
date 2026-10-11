<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Actividad03</title>
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
    $personas1 = array('Ana', 'Luis', 'Marta', 'Pablo');
    $personas2 = array('Lucia', 'Ana', 'Pablo');
    echo "<h3>Personas en actividad 1</h3>";
    foreach ($personas1 as $persona) {
        echo "<ul>
           <li>$persona</li>
           </ul>";
    }
    echo "<h3>Personas en actividad 2</h3>";
    foreach ($personas2 as $persona) {
        echo "<ul>
           <li>$persona</li>
           </ul>";
    }
    $repetidos = array_intersect($personas1, $personas2);

    echo "<h3>Personas en ambas actividades</h3>";
    foreach ($repetidos as $repe) {
        echo "<ul>
           <li>$repe</li>
           </ul>";
    }
    ?>

</html>