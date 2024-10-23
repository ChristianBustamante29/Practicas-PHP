<?php

$meses= array(
    'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
    'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
);

$numeros= array(1, 2, 3, 10, 20, 30, 100, 200, 300, 1000);


//sort($meses);

//rsort($meses);

//sort($numeros);


rsort($numeros);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Meses del Año</title>
</head>
<body>
    <h1>Meses del Año</h1>
    <ul>
        <?php

        foreach($numeros as $numero){
            echo '<li>' . $numero . '</li>';
        }

        ?>
    </ul>
</body>
</html>