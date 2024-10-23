<?php

$id = $_GET['id'];

try{
    // Codigo
    $conexion = new PDO('mysql:host=localhost;dbname=prueba_datos', 'root', '');
    // echo "Conexion OK";

    // $resultados = $conexion->query("SELECT * FROM usuarios WHERE id = $id");

    // foreach ($resultados as $fila){
    //     echo $fila['ID'] . ' - ' . $fila['nombre'] . '<br />';
    // }

    //Prepared statements
    $statement = $conexion->prepare('INSERT INTO usuarios VALUES (null, "Paco", "25")');
    $statement->execute();

    $resultados = $statement->fetchAll();
    foreach($resultados  as $usuarios){
        echo $usuarios['nombre'] . '<br>';
    }

}catch(PDOException $e){
    // Mostrar error    
    echo "ERROR: " . $e->getMessage();
}


?>