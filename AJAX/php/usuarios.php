<?php

header ('Content-type: application/json; charset=utf-8');

$respuesta = [
    [
        'id' => '132123hjk3k311',
        'nombrë' => 'Carlos',
        'edad' => 23,
        'pais' => 'Mexico',
        'correo' => 'correo@correo.com'
    ],
    [
        'id' => '12kjk12kj1121',
        'nombrë' => 'Alejandro',
        'edad' => 26,
        'pais' => 'España',
        'correo' => 'email@correo.com'
    ]
];

echo json_encode($respuesta);

// echo '[{"nombre": "Carlos"}, {"nombre": "Alejandro"}]';


?>