<?php
namespace Modelo;
use PDO;
class OptionModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function obtenerOpciones() {
        $stmt = $this->pdo->query("SELECT * FROM votaciones");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

   public function agregarOpcion($texto) {
    $stmt = $this->pdo->prepare("INSERT INTO votaciones (opcion, votos) VALUES (?, 0)");
    $stmt->execute([$texto]);
}
    
    public function votar($id) {
        $stmt = $this->pdo->prepare("UPDATE votaciones SET votos = votos + 1 WHERE id = ?");
        $stmt->execute([$id]);
    }

    public function eliminar($id) {
        $stmt = $this->pdo->prepare("DELETE FROM votaciones WHERE id = ?");
        $stmt->execute([$id]);
    }
}
?>