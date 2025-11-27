<?php
require_once 'ArchivoWindows7.php';

/**
 * Archivo PowerPoint de Windows 7
 */
class PowerPointWindows7 implements ArchivoWindows7
{
    private string $nombre;

    public function __construct(string $nombre)
    {
        $this->nombre = $nombre;
    }

    public function abrirArchivo(): string
    {
        return "Abriendo presentación PowerPoint de Windows 7: " . $this->nombre . ".ppt";
    }

    public function obtenerNombre(): string
    {
        return $this->nombre;
    }

    public function obtenerExtension(): string
    {
        return ".ppt";
    }
}
