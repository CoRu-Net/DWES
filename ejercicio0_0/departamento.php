<?php
class Departamento{
    private $nombre;
    private $personas = array();
    public function __construct($nombre){
        $this->nombre = $nombre;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function agregarPersona($persona){
        $this->personas[] = $persona;
    }
    public function getPersonas(){
        return $this->personas;
    }
}?>