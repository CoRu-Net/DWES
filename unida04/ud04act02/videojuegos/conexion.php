<?php
$host = 'db';
$dbname = 'tienda';
$port = 3306;
$usuario = 'root';
$password = 'root';  

try {
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
    $pdo = new PDO($dsn, $usuario, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
} catch (PDOException $e) {
    die("Error en la conexión con la base de datos: " . $e->getMessage());
}
