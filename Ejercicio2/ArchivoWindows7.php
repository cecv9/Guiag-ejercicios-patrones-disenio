<?php
/**
 * Interfaz para archivos de Windows 7 (formato antiguo)
 */
interface ArchivoWindows7
{
    public function abrirArchivo(): string;
    public function obtenerNombre(): string;
    public function obtenerExtension(): string;
}
