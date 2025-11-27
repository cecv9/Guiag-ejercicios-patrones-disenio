<?php 

namespace Ejercicio1;

use Ejercicio1\PersonajeFactory;
use Exception;  


// Ejemplo de uso
try {
    $nivel = 'facil'; // Cambiar a 'dificil' para crear un Zombi
    $personaje = PersonajeFactory::crearPersonaje($nivel);
    echo "Personaje creado: " . $personaje->getNombre() . "\n";
    echo "Ataque: " . $personaje->getAtaque() . "\n";
    echo "Velocidad: " . $personaje->getVelocidad() . "\n";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}