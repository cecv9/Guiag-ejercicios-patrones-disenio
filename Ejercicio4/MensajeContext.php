<?php
require_once 'SalidaStrategy.php';

/**
 * Contexto que utiliza las estrategias de salida
 */
class MensajeContext
{
    private SalidaStrategy $strategy;

    public function __construct(SalidaStrategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function setStrategy(SalidaStrategy $strategy): void
    {
        $this->strategy = $strategy;
    }

    public function enviarMensaje(string $mensaje): string
    {
        return $this->strategy->mostrar($mensaje);
    }
}
