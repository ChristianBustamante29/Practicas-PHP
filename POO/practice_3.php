<?php

// Ejemplo 1 sin programacion orientada a objetos

// $nombre = 'Carlos';
// $edad = 23;
// $pais = 'Mexico';

// $nombre2 = 'Alejandro';
// $edad2 = 24;
// $pais2 = 'España';

// echo $nombre;


class Persona {
    public $nombre;
    public $edad;
    public $pais;

    public function mostrarInformacion(){
        echo 'Hola Mundo';
    }
}

$carlos = new Persona;
$carlos->nombre = 'Carlos Arturo';
$carlos->edad = 23;
$carlos->pais = 'Mexico';

$carlos->mostrarInformacion();

// echo $carlos->nombre . ' tiene ' . $carlos->edad . ' años de edad.';

$alejandro = new Persona;
$alejandro->nombre = 'Alejandro';
$alejandro->edad = 30;
$alejandro->pais = 'España';