<?php
require_once 'ArmaDecorator.php';

/**
 * Decorador de Arco
 */
class ArcoDecorator extends ArmaDecorator
{
    public function getDescripcion(): string
    {
        return $this->personaje->getDescripcion() . " + Arco";
    }

    public function getPoder(): int
    {
        return $this->personaje->getPoder() + 10;
    }
}
