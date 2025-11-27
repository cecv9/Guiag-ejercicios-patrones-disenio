<?php
/**
 * Interfaz base para los personajes del juego
 */
interface Personaje
{
    public function atacar(): string;
    public function getVelocidad(): int;
    public function getNombre(): string;
}
