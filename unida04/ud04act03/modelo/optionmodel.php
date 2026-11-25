<?php

namespace Modelo;

use PDO;

class OptionModel
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function obtenerOpciones()
    {
        $sql = "SELECT * FROM votaciones";
        $sentencia = $this->pdo->prepare($sql);
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    public function agregarOpcion($texto)
    {
        $sql = "INSERT INTO votaciones (opcion, votos) VALUES (:opcion, 0)";
        $sentencia = $this->pdo->prepare($sql);
        $sentencia->bindParam(':opcion', $texto);
        $sentencia->execute();
    }


    public function votar($id)
    {
        $sql = "UPDATE votaciones SET votos = votos + 1 WHERE id = :id";
        $sentencia = $this->pdo->prepare($sql);
        $sentencia->bindParam(':id', $id);
        $sentencia->execute();
    }

    public function eliminar($id)
    {
        $sql = "DELETE FROM votaciones WHERE id = :id";
        $sentencia = $this->pdo->prepare($sql);
        $sentencia->bindParam(':id', $id);
        $sentencia->execute();
    }
}
