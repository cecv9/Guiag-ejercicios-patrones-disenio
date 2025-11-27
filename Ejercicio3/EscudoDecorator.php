<?php
require_once 'ArmaDecorator.php';

/**
 * Decorador de Escudo
 */
class EscudoDecorator extends ArmaDecorator
{
    public function getDescripcion(): string
    {
        return $this->personaje->getDescripcion() . " + Escudo";
    }

    public function getPoder(): int
    {
        return $this->personaje->getPoder() + 5;
    }
}
