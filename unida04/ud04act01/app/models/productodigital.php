<?php
namespace app\models;
class ProductoDigital extends Producto
{
    private float $tamanoArchivo;
    public function __construct(string $codigo, float $precio, float $tamanoArchivo)
    {
        parent::__construct($codigo, $precio);
        $this->tamanoArchivo = $tamanoArchivo;
    }
    public function getTamanoArchivo(): float
    {
        return $this->tamanoArchivo;
    }
    public function setTamanoArchivo(float $tamanoArchivo): void
    {
        $this->tamanoArchivo = $tamanoArchivo;
    }
    public function mostrarResumen(): string
    {
        return "💾 Producto digital {$this->getCodigo()} - {$this->precio}€ ({$this->tamanoArchivo}MB)";
    }
}
?>