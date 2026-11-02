<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pico.cyan.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Formulario web</title>
</head>

<body>
    <div id="cuadro">
        <h1>Formularío web</h1>
        <form method="post" action="procesar.php">
            <label>Nombre y apellidos <input type="text" name="nombre"></label>
            <label>Email<input type="email" name="email"></label>
            <label>url página personal<input type="url" name="url"></label>
            <legend>Genero</legend>
            <label><input type="radio" name="sexo" value="mujer">Mujer</label>
            <label><input type="radio" name="sexo" value="hombre">Hombre</label>
            <label><input type="radio" name="sexo" value="otro">Otro</label>
            <label id="convi">Nº de convivientes<input id="convive" type="number" name="convivientes"></label>
            <fieldset>
                <legend>Aficiones</legend>
                <label><input type="checkbox" name="aficiones[]" value="games"> Video juegos</label>
                <label><input type="checkbox" name="aficiones[]" value="deportes"> Deportes</label>
                <label><input type="checkbox" name="aficiones[]" value="cine"> Cine</label>
                <label><input type="checkbox" name="aficiones[]" value="viajar"> Viajar</label>
            </fieldset>
            <label for="menu">Menú favorito</label>
            <select name="menu" id="menu">
                <option value="" selected disabled>Seleccione una opción</option>
                <option value="callos">Callos</option>
                <option value="pizza">Pizza</option>
                <option value="shawarma">Shawarma</option>
                <option value="lentejas">Lentejas</option>
            </select>
            <button type="submit" formaction="resumen.php">Enviar</button>
            </label>
        </form>
    </div>
</body>

</html>