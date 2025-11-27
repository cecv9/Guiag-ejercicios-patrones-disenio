<?php
require_once 'ArchivoWindows7.php';

/**
 * Archivo Word de Windows 7
 */
class WordWindows7 implements ArchivoWindows7
{
    private string $nombre;

    public function __construct(string $nombre)
    {
        $this->nombre = $nombre;
    }

    public function abrirArchivo(): string
    {
        return "Abriendo documento Word de Windows 7: " . $this->nombre . ".doc";
    }

    public function obtenerNombre(): string
    {
        return $this->nombre;
    }

    public function obtenerExtension(): string
    {
        return ".doc";
    }
}
