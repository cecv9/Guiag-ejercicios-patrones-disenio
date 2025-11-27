<?php
require_once 'Personaje.php';

/**
 * Clase Zombi - Personaje para nivel difícil
 */
class Zombi implements Personaje
{
    private string $nombre = "Zombi";
    private int $velocidad = 3;

    public function atacar(): string
    {
        return "El Zombi ataca mordiendo! (Daño: alto)";
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
