<?php
namespace app\models;
use app\interfaces\Detalleinterface;
class Pedido implements DetalleInterface
{
    private Cliente $cliente;

    
    private array $productos = [];
    public function __construct(Cliente $cliente)
    {
        $this->cliente = $cliente;
    }
    public function agregarProducto(Producto $p): void
    {
        $this->productos[] = $p;
    }
    public function mostrarDetalle(): string
    {
        $total = 0;
        $salida = "<article>";
        $salida .= "<header><strong>Pedido de {$this->cliente}</strong></header>";
        $salida .= "<ul style='list-style: none; padding-left: 0;'>";
        foreach ($this->productos as $producto) {
            $salida .= "<li>" . $producto->mostrarResumen() . "</li>";
            $total += $producto->getPrecio();
        }
        $salida .= "</ul>";
        $salida .= "<footer><strong>Total: " . number_format($total, 2, ',', '.') . "€</strong></footer>";
        $salida .= "</article>";
        return $salida;
    }
}
?>