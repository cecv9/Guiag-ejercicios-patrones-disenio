<?php
require_once 'PersonajeJuego.php';

/**
 * Personaje Mago base
 */
class Mago implements PersonajeJuego
{
    public function getDescripcion(): string
    {
        return "Mago";
    }

    public function getPoder(): int
    {
        return 8;
    }
}
