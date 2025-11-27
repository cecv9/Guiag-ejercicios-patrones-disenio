<?php
require_once 'ArchivoWindows10.php';
require_once 'ArchivoWindows7.php';

/**
 * Adaptador que permite a Windows 10 abrir archivos de Windows 7
 */
class AdaptadorArchivoWindows7 implements ArchivoWindows10
{
    private ArchivoWindows7 $archivoWindows7;

    public function __construct(ArchivoWindows7 $archivoWindows7)
    {
        $this->archivoWindows7 = $archivoWindows7;
    }

    public function abrir(): string
    {
        // Adaptamos el método de Windows 7 al formato de Windows 10
        return "[Windows 10] Adaptando archivo... " . $this->archivoWindows7->abrirArchivo();
    }

    public function getNombre(): string
    {
        return $this->archivoWindows7->obtenerNombre();
    }

    public function getExtension(): string
    {
        // Convertimos la extensión antigua a la nueva
        $extensionAntigua = $this->archivoWindows7->obtenerExtension();
        $mapeoExtensiones = [
            '.doc' => '.docx',
            '.xls' => '.xlsx',
            '.ppt' => '.pptx'
        ];
        return $mapeoExtensiones[$extensionAntigua] ?? $extensionAntigua;
    }
}
