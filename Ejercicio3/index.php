<?php
/**
 * Ejercicio 3: Patrón Decorator
 * 
 * Programa que permite añadir diferentes armas a personajes de videojuegos
 * usando el patrón Decorator
 */

require_once 'Guerrero.php';
require_once 'Mago.php';
require_once 'EspadaDecorator.php';
require_once 'ArcoDecorator.php';
require_once 'EscudoDecorator.php';
require_once 'VaritaDecorator.php';

echo "=== Ejercicio 3: Patrón Decorator ===\n\n";

// Crear personajes base
echo "--- Personajes Base ---\n";
$guerrero = new Guerrero();
echo "Personaje: " . $guerrero->getDescripcion() . "\n";
echo "Poder: " . $guerrero->getPoder() . "\n\n";

$mago = new Mago();
echo "Personaje: " . $mago->getDescripcion() . "\n";
echo "Poder: " . $mago->getPoder() . "\n\n";

// Añadir armas al Guerrero
echo "--- Guerrero con Armas ---\n";
$guerreroConEspada = new EspadaDecorator($guerrero);
echo "Personaje: " . $guerreroConEspada->getDescripcion() . "\n";
echo "Poder: " . $guerreroConEspada->getPoder() . "\n\n";

$guerreroConEspadaYEscudo = new EscudoDecorator($guerreroConEspada);
echo "Personaje: " . $guerreroConEspadaYEscudo->getDescripcion() . "\n";
echo "Poder: " . $guerreroConEspadaYEscudo->getPoder() . "\n\n";

// Añadir armas al Mago
echo "--- Mago con Armas ---\n";
$magoConVarita = new VaritaDecorator($mago);
echo "Personaje: " . $magoConVarita->getDescripcion() . "\n";
echo "Poder: " . $magoConVarita->getPoder() . "\n\n";

$magoConVaritaYArco = new ArcoDecorator($magoConVarita);
echo "Personaje: " . $magoConVaritaYArco->getDescripcion() . "\n";
echo "Poder: " . $magoConVaritaYArco->getPoder() . "\n";
