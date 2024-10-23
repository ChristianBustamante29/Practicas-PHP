<?php

// if (condicion) {
// // instrucciones
// }


/* Operadores de comparacion 
* == Igualdad
* < Menor que 
* > Mayor que 
* <= Menor o igual que 
* != Diferencia
* >= Mayor o igual que 
* ! Negacion
*/

/* Operadores logicos:

&& - Evalua que se cumplan las 2 condiciones
||, OR - Evalua que se cumpla al menos una condicion
XOR - Evalua que se cumpla una y solo una condicion

*/

$edad = 18;
$nombre = 'Carlos';

if($edad >= 18 && $nombre == 'Carlos') {
    echo '<h1> Bienvenido </h1>';  
}

if($edad < 18 || $nombre != 'Carlos') {
    echo '<h1> Eres menor de edad </h1>'; 
}

?>