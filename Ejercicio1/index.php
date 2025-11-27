<?php
/**
 * Ejercicio 1: Patrón Factory
 * 
 * Programa que crea personajes (Esqueleto o Zombi) según el nivel del juego
 * - Nivel fácil: Esqueleto
 * - Nivel difícil: Zombi
 */

require_once 'PersonajeFactory.php';

echo "=== Ejercicio 1: Patrón Factory ===\n\n";

// Crear personaje para nivel fácil
echo "Nivel Fácil:\n";
$personajeFacil = PersonajeFactory::crearPersonaje(PersonajeFactory::NIVEL_FACIL);
echo "Personaje creado: " . $personajeFacil->getNombre() . "\n";
echo "Velocidad: " . $personajeFacil->getVelocidad() . "\n";
echo "Ataque: " . $personajeFacil->atacar() . "\n\n";

// Crear personaje para nivel difícil
echo "Nivel Difícil:\n";
$personajeDificil = PersonajeFactory::crearPersonaje(PersonajeFactory::NIVEL_DIFICIL);
echo "Personaje creado: " . $personajeDificil->getNombre() . "\n";
echo "Velocidad: " . $personajeDificil->getVelocidad() . "\n";
echo "Ataque: " . $personajeDificil->atacar() . "\n";
