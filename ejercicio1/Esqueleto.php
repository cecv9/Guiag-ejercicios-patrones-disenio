<?php

namespace Ejercicio1;

require_once './Personaje.php';

class Esqueleto extends Personaje {
    public function __construct() {
        parent::__construct("Esqueleto", 10, 5);
    }

}