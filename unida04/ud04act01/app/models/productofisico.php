<?php
namespace app\models;
class ProductoFisico extends Producto
{
    private float $peso;
    public function __construct(string $codigo, float $precio, float $peso)
    {
        parent::__construct($codigo, $precio);
        $this->peso = $peso;
    }
    public function getPeso(): float
    {
        return $this->peso;
    }
    public function setPeso(float $peso): void
    {
        $this->peso = $peso;
    }
    public function mostrarResumen(): string
    {
        return "📦 Producto físico {$this->getCodigo()} - {$this->precio}€ ({$this->peso} kg)";
    }
}
?>