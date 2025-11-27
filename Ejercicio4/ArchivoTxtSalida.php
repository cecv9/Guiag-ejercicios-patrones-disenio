<?php
require_once 'SalidaStrategy.php';

/**
 * Estrategia de salida a archivo TXT
 */
class ArchivoTxtSalida implements SalidaStrategy
{
    private string $nombreArchivo;

    public function __construct(string $nombreArchivo = 'salida.txt')
    {
        $this->nombreArchivo = $nombreArchivo;
    }

    public function mostrar(string $mensaje): string
    {
        $linea = date('Y-m-d H:i:s') . " - " . $mensaje . "\n";
        $resultado = file_put_contents($this->nombreArchivo, $linea, FILE_APPEND);
        if ($resultado === false) {
            $error = "[ARCHIVO TXT] Error al guardar en " . $this->nombreArchivo . ": " . $mensaje;
            echo $error . "\n";
            return $error;
        }
        echo "[ARCHIVO TXT] Mensaje guardado en " . $this->nombreArchivo . ": " . $mensaje . "\n";
        return $linea;
    }

    public function getNombreArchivo(): string
    {
        return $this->nombreArchivo;
    }
}
