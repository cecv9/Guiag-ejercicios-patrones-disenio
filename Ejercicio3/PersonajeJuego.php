<?php
/**
 * Interfaz base para personajes de videojuegos
 */
interface PersonajeJuego
{
    public function getDescripcion(): string;
    public function getPoder(): int;
}
