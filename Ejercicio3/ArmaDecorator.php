<?php
require_once 'PersonajeJuego.php';

/**
 * Clase base abstracta para decoradores de armas
 */
abstract class ArmaDecorator implements PersonajeJuego
{
    protected PersonajeJuego $personaje;

    public function __construct(PersonajeJuego $personaje)
    {
        $this->personaje = $personaje;
    }

    abstract public function getDescripcion(): string;
    abstract public function getPoder(): int;
}
