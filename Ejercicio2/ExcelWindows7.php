<?php
require_once 'ArchivoWindows7.php';

/**
 * Archivo Excel de Windows 7
 */
class ExcelWindows7 implements ArchivoWindows7
{
    private string $nombre;

    public function __construct(string $nombre)
    {
        $this->nombre = $nombre;
    }

    public function abrirArchivo(): string
    {
        return "Abriendo hoja de cálculo Excel de Windows 7: " . $this->nombre . ".xls";
    }

    public function obtenerNombre(): string
    {
        return $this->nombre;
    }

    public function obtenerExtension(): string
    {
        return ".xls";
    }
}
