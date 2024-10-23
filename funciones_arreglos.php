<?php

// $amigo = array(
//     'telefono' => 8715209815, 'edad' => 20, 'pais' => 'mexico'
// );

// extract($amigo);

// echo($telefono);

$semana = array(
    'lunes', 'martes', 'miercoles', 
    'jueves', 'viernes','sabado', 'domingo'
);

// $ultimo_dia = array_pop($semana);

// foreach ($semana as $dia) {
//     echo $dia . '<br />';
// }

// echo join('<br />', $semana);

// echo count($semana);
// sort ($semana);
// echo join(' - ', $semana);

$semana_reverse = array_reverse($semana);
echo join(', ', $semana_reverse);



?>