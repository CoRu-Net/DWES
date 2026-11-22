<?php

class Videojuego {
    private $id;
    private $titulo;
    private $plataforma;
    private $genero;
    private $precio;

  

    public function getId() {
        return $this->id;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getPlataforma() {
        return $this->plataforma;
    }

    public function getGenero() {
        return $this->genero;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function generarCodigo() {
        $parteTitulo = mb_substr($this->titulo, 0, 2);
        $partePlataforma = mb_substr($this->plataforma, 0, 2);
        $parteGenero = mb_substr($this->genero, 0, 3);

        return "{$parteTitulo}-{$partePlataforma}-{$parteGenero}";
    }
}
