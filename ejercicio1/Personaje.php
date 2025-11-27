<?php

namespace Ejercicio1;

/* 
Ejercicio 1:

 

Crear un programa que contenga dos personajes: 
"Esqueleto" y "Zombi". Cada personaje tendrá una lógica diferente en sus ataques y velocidad. 
La creación de los personajes dependerá del nivel del juego:

 

- En el nivel fácil se creará un personaje "Esqueleto".

- En el nivel difícil se creará un personaje "Zombi".

*/

class Personaje {
    protected $nombre;
    protected $ataque;
    protected $velocidad;

    public function __construct($nombre, $ataque, $velocidad) {
        $this->nombre = $nombre;
        $this->ataque = $ataque;
        $this->velocidad = $velocidad;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getAtaque() {
        return $this->ataque;
    }

    public function getVelocidad() {
        return $this->velocidad;
    }
}






