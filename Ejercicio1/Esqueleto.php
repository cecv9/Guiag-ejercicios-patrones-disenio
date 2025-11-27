<?php
require_once 'Personaje.php';

/**
 * Clase Esqueleto - Personaje para nivel fácil
 */
class Esqueleto implements Personaje
{
    private string $nombre = "Esqueleto";
    private int $velocidad = 5;

    public function atacar(): string
    {
        return "El Esqueleto ataca con sus huesos! (Daño: bajo)";
    }

    public function getVelocidad(): int
    {
        return $this->velocidad;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }
}
