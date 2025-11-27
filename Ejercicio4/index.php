<?php
/**
 * Ejercicio 4: Patrón Strategy
 * 
 * Programa que muestra mensajes en diferentes tipos de salida:
 * - Consola
 * - JSON
 * - Archivo TXT
 * 
 * Cada estrategia está en su propio archivo (estructura modular)
 */

require_once 'MensajeContext.php';
require_once 'ConsolaSalida.php';
require_once 'JsonSalida.php';
require_once 'ArchivoTxtSalida.php';

echo "=== Ejercicio 4: Patrón Strategy ===\n\n";

$mensaje = "Hola, este es un mensaje de prueba";

// Usar estrategia de Consola
echo "--- Salida por Consola ---\n";
$context = new MensajeContext(new ConsolaSalida());
$context->enviarMensaje($mensaje);
echo "\n";

// Cambiar a estrategia de JSON
echo "--- Salida en JSON ---\n";
$context->setStrategy(new JsonSalida());
$context->enviarMensaje($mensaje);
echo "\n";

// Cambiar a estrategia de Archivo TXT
echo "--- Salida a Archivo TXT ---\n";
$archivoSalida = new ArchivoTxtSalida('mensajes.txt');
$context->setStrategy($archivoSalida);
$context->enviarMensaje($mensaje);
$context->enviarMensaje("Segundo mensaje de prueba");
echo "\n";

// Mostrar contenido del archivo creado
echo "--- Contenido del archivo " . $archivoSalida->getNombreArchivo() . " ---\n";
if (file_exists($archivoSalida->getNombreArchivo())) {
    echo file_get_contents($archivoSalida->getNombreArchivo());
}
