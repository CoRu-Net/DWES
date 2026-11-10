<?php
class Persona{
    private $nombre;
    private $salario;
    public function __construct($nombre, $salario){
        $this->nombre = $nombre;
        $this->salario = $salario;
    }
public function getNombre(){
        return $this->nombre;
    }
    public function getSalario(){
        return $this->salario;
    }

}
?>