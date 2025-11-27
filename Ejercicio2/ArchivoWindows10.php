<?php
/**
 * Interfaz para archivos de Windows 10
 */
interface ArchivoWindows10
{
    public function abrir(): string;
    public function getNombre(): string;
    public function getExtension(): string;
}
