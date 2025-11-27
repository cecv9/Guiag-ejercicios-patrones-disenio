<?php
require_once 'PersonajeJuego.php';

/**
 * Personaje Guerrero base
 */
class Guerrero implements PersonajeJuego
{
    public function getDescripcion(): string
    {
        return "Guerrero";
    }

    public function getPoder(): int
    {
        return 10;
    }
}
