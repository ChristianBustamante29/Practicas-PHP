<?php

try {
    $conexion = new PDO('mysql:host=localhost;dbname=paginacion_practica', 'root', '');
} catch (PDOException $e) {
    echo "ERROR: " . $E->getMessage();
    die();
}

$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
$postPorPagina = 5;

$inicio = ($pagina > 1) ? ($pagina * $postPorPagina - $postPorPagina) : 0;

$articulos = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM articulos LIMIT $inicio, $postPorPagina");

$articulos->execute();
$articulos = $articulos->fetchAll();

if(!$articulos){
    header('Location: http://localhost/cursos/curso_php/Practicas/paginacion/');
}

$totalArticulos = $conexion->query('SELECT FOUND_ROWS() as total');
$totalArticulos = $totalArticulos->fetch()['total'];

$numeroPaginas = ceil($totalArticulos / $postPorPagina);



require 'index-view.php';

?>