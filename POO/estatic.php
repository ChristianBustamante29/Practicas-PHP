<?php

class Persona {
    public static $dia = '7 de septiembre';
    
    public static function saludo($nombre = null){
        if($nombre){
            return 'Hola, buen día ' . $nombre;
        } else {
            return 'Hola, buen día.';
        }
    }
}

// $carlos = new Persona;
// echo $carlos->saludo('Carlos');

// echo Persona::saludo();

echo Persona::saludo('Juan');