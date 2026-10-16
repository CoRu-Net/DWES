<?php
$email = "fcorrub183@g.educaand.es";

// Separar usuario y dominio
$partes = explode("@", $email);
$usuario = $partes[0];
$dominio = $partes[1];

$longitud = strlen($usuario);

if ($longitud >= 3) {
    $estrellas = "";
    for ($i = 0; $i < $longitud - 2; $i++) {
        $estrellas .= "*";
    }
    $enmascarado = substr($usuario, 0, 1) . $estrellas . substr($usuario, $longitud - 1, 1);
} else {
    $enmascarado = $usuario;
}

echo "<strong>gEmail:</strong> " . $email . "<br>\n";
echo "<BR>";
echo "<strong> Usuario: </strong>" . $usuario . "<br>\n";
echo "<BR>";
echo "<strong> Dominio:</strong> " . $dominio . "<br>\n";
echo "<BR>";
echo "<strong> Usuario enmascarado:</strong>" . $enmascarado . "<br>\n";
?>