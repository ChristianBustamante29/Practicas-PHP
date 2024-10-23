<?php

$paises = array('Mexico', 'España', 'Colombia', 'Brasil', 'Peru', 'Jamaica');

// foreach ($paises as $pais){
//     if ($pais == 'Brasil') {
//     break;
//     }
//     echo $pais . '<br />';
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Países de latinoamerica</h1>
    <?php

    foreach($paises as $pais){
        if ($pais == 'España'){
            continue;
        } 
        echo $pais . '<br />'; 
    }
    
    ?>
</body>
</html>

