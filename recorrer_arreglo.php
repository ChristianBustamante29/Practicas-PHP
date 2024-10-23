<?php

$meses= array(
    'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
    'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Meses del Añejo</title>
</head>
<body>
    <h1>Meses del Añejo</h1>
    <ul>
        <?php

        foreach($meses as $mes){
            echo '<li>' . $mes . '</li>';
        }

        ?>
    </ul>
</body>
</html>