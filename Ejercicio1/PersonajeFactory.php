<?php
require_once 'Esqueleto.php';
require_once 'Zombi.php';

/**
 * Factory para crear personajes según el nivel del juego
 */
class PersonajeFactory
{
    public const NIVEL_FACIL = 'facil';
    public const NIVEL_DIFICIL = 'dificil';

    /**
     * Crea un personaje según el nivel del juego
     * 
     * @param string $nivel El nivel del juego (facil o dificil)
     * @return Personaje El personaje creado
     * @throws InvalidArgumentException Si el nivel no es válido
     */
    public static function crearPersonaje(string $nivel): Personaje
    {
        switch ($nivel) {
            case self::NIVEL_FACIL:
                return new Esqueleto();
            case self::NIVEL_DIFICIL:
                return new Zombi();
            default:
                throw new InvalidArgumentException("Nivel no válido: $nivel");
        }
    }
}
