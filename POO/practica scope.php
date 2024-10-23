<?php

class Persona {
    protected $nombre;
    public $edad;
    public $pais;

    function __construct($nombre, $edad, $pais){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->pais = $pais;
    }

    public function mostrarInformacion(){
        return $this->nombre . ' tiene ' . $this->edad . ' años de edad y es de ' . $this->pais;
    }
}

$carlos = new Persona('Carlos Alberto', 24, 'Mexico');

echo $carlos->nombre;