<?php
namespace Controlador;
class VoteController {
private $modelo;

public function __construct($modelo) {
    $this->modelo = $modelo;
}
public function procesar() {
    
    $mensaje = '';
    
        if (!empty($_POST['texto'])) {
            $this->modelo->agregarOpcion($_POST['texto']);
            $mensaje = '✅ Opción agregada correctamente';
        } elseif (!empty($_POST['votar'])) {
            $this->modelo->votar($_POST['votar']);
            $mensaje = '🗳️ Voto registrado';
        } elseif (!empty($_POST['eliminar'])) {
            $this->modelo->eliminar($_POST['eliminar']);
            $mensaje = '🗑️ Opción eliminada';
        }
    
    
    $opciones = $this->modelo->obtenerOpciones();
   
    $total = 0;
    foreach ($opciones as $op) {
        $total += $op['votos'];
    }

    return [
        'opciones' => $opciones,
        'total'    => $total,
        'mensaje'  => $mensaje
    ];
}
}