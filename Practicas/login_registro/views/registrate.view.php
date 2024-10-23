<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Registrate</title>
</head>
<body>
    <div class="contenedor">
        <h1 class="titulo">Registrate</h1>
        <hr class="border">

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="formulario" name="login">
            <div class="form-group">
                <i class="icono izquierda fa fa-user"></i><input class="usuario" type="text" name="usuario" placeholder="Usuario">
            </div>

            <div class="form-group">
                <i class="icono izquierda fa fa-lock"></i><input class="password" type="password" name="password" placeholder="Contraseña">
            </div>

            <div class="form-group">
                <i class="icono izquierda fa fa-lock"></i><input class="password_btn" type="password" name="password2" placeholder="Repetir Contraseña">
                <i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>
            </div>

            <?php if(!empty($errores)): ?>
                <div class="error">
                    <ul>
                        <?php echo $errores; ?>
                    </ul>
                </div>
            <?php endif; ?>
        </form>
        <p class="texto-registrate">
            ¿Ya tienes cuenta?
            <a href="login.php">Iniciar sesion</a>
        </p>
    </div>
</body>
</html>