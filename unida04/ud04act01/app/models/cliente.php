<?php
namespace app\models;
class Cliente
{
    private string $nombre;
    private string $email;
    public function __construct(string $nombre, string $email)
    {
        $this->nombre = $nombre;
        $this->email = $email;
    }
    public function getNombre(): string
    {
        return $this->nombre;
    }
    public function setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }
    public function getEmail(): string
    {
        return $this->email;
    }
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }
    public function __toString(): string
    {
        return "{$this->nombre} ({$this->email})";
    }
}
?>