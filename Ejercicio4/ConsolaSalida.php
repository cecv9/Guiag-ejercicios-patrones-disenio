<?php
require_once 'SalidaStrategy.php';

/**
 * Estrategia de salida por consola
 */
class ConsolaSalida implements SalidaStrategy
{
    public function mostrar(string $mensaje): string
    {
        $salida = "[CONSOLA] " . $mensaje;
        echo $salida . "\n";
        return $salida;
    }
}
