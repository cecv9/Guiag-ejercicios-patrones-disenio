<?php 

namespace Ejercicio1;

require_once './Personaje.php';

class Zombi extends Personaje {
    public function __construct() {
        parent::__construct("Zombi", 15, 3);
    }
}