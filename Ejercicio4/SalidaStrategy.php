<?php
/**
 * Interfaz para estrategias de salida de mensajes
 */
interface SalidaStrategy
{
    public function mostrar(string $mensaje): string;
}
