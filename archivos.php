<?php



// if($resultado = file_exists('documento.txt')) {
//     echo "El archivo existe";
// } else {
//     echo "El archivo no existe";
// }

// echo file_get_contents('documento.txt');

// file_put_contents('documento.txt', "Hola Arturo \n", FILE_APPEND);

// file_put_contents('documento.txt', '');
// for ($i = 1; $i <= 10 ; $i++ ){
//     file_put_contents('documento.txt', "$i \n", FILE_APPEND);
// }

$archivo = file('documento.txt');
echo "<pre>";
print_r($archivo)

?>