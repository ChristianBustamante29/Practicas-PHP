<?php

// // print_r($_POST);

// if(!$_POST){
//     header('Location: http://localhost:8080/curso_php/formularios/');
// }

// $nombre = $_POST['nombre'];
// $sexo = $_POST['sexo'];
// $year = $_POST['year'];
// $terminos = $_POST['terminos'];

// echo 'Hola, ' . $nombre . ' eres ' . $sexo;

if(!$_GET){
    header('Location: http://localhost:8080/curso_php/formularios/');
}

$nombre = $_GET['nombre'];
$sexo = $_GET['sexo'];
$year = $_GET['year'];
$terminos = $_GET['terminos'];

if ($nombre){
    echo $nombre . '<br />';
} else {
    echo "El usuario no establecio su nombre" . '<br />';
}

echo $sexo . '<br />';
echo $year . '<br />';
echo $terminos . '<br />';

?>