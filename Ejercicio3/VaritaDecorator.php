<?php
require_once 'ArmaDecorator.php';

/**
 * Decorador de Varita Mágica
 */
class VaritaDecorator extends ArmaDecorator
{
    public function getDescripcion(): string
    {
        return $this->personaje->getDescripcion() . " + Varita Mágica";
    }

    public function getPoder(): int
    {
        return $this->personaje->getPoder() + 20;
    }
}
