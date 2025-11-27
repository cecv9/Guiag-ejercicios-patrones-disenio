<?php
require_once 'ArmaDecorator.php';

/**
 * Decorador de Espada
 */
class EspadaDecorator extends ArmaDecorator
{
    public function getDescripcion(): string
    {
        return $this->personaje->getDescripcion() . " + Espada";
    }

    public function getPoder(): int
    {
        return $this->personaje->getPoder() + 15;
    }
}
