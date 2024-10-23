<?php


class Persona {
    public $nombre;
    public $edad;
    public $pais;

    function __construct($nombre, $edad, $pais){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->pais = $pais;
    }

    public function mostrarInformacion(){
        echo $this->nombre . ' tiene ' . $this->edad . ' años de edad y es de ' . $this->pais;
    }
    
}

$carlos = new Persona('Carlos Roberto', 25, 'Mexico');
// $carlos->nombre = 'Carlos Arturo';
// $carlos->edad = 23;
// $carlos->pais = 'Mexico';
$carlos->mostrarInformacion();

echo '<br />';

$alejandro = new Persona('Alejandro Boker', 30, 'España');
// $alejandro->nombre = 'Alejandro Arturo';
// $alejandro->edad = 30;
// $alejandro->pais = 'España';
$alejandro->mostrarInformacion();