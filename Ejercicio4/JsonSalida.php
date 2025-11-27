<?php
require_once 'SalidaStrategy.php';

/**
 * Estrategia de salida en formato JSON
 */
class JsonSalida implements SalidaStrategy
{
    public function mostrar(string $mensaje): string
    {
        $data = [
            'tipo' => 'mensaje',
            'contenido' => $mensaje,
            'timestamp' => date('Y-m-d H:i:s')
        ];
        $json = json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
        echo "[JSON]\n" . $json . "\n";
        return $json;
    }
}
