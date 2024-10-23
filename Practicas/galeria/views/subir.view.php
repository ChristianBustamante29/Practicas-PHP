<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<title>Mi Increíble Galería en PHP</title>
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
	<header>
		<div class="contenedor">
			<h1 class="titulo">Subir foto</h1>
		</div>
	</header>

    <div class="contenedor">
        <form class="formulario" method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <label for="foto">Selecciona tu foto</label>
            <input type="file" id="foto" name="foto">

            <label for="titulo">Titulo de la foto</label>
            <input type="text" id="titulo" name="titulo">

            <label for="texto">Descripción</label>
            <textarea name="texto" id="texto" placeholder="Ingresa una descripción"></textarea>

            <?php if(isset($error)): ?>
                <p class="error"><?php echo $error; ?></p>
            <?php endif ?>

            <input type="submit" class="submit" value="Subir foto">
        </form>
    </div>

	<footer>
		<p class="copyright">Galeria creada por Carlos Arturo - FalconMasters</p>
	</footer>
</body>
</html>