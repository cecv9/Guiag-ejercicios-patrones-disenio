<?php 
namespace Ejercicio1;
require_once './Esqueleto.php';
require_once './Zombi.php';

class PersonajeFactory {
    public static function crearPersonaje($nivel) {
        if ($nivel === 'facil') {
            return new Esqueleto();
        } elseif ($nivel === 'dificil') {
            return new Zombi();
        } else {
            throw new Exception("Nivel desconocido: $nivel");
        }
    }
}