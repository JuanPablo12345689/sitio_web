<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>

    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/form-style.css">
    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="css/error.css">

    <script src="https://kit.fontawesome.com/87f377c3df.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="content">
        <h1>Regístrate</h1>

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" name="login" autocomplete="off">
            <div class="form-group">
                <i class="fas fa-user"></i>
                <input type="text" name="nombre_usuario" placeholder="Nombre"/>
            </div>
            <div class="form-group">
                <i class="fas fa-user"></i>
                <input type="text" name="correo" placeholder="correo"/>
            </div>

            <div class="form-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="contrasena" placeholder="Contrasenia"/>
            </div>

            <div class="form-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="confirmar_contrasena" placeholder="Confirmar Contrasenia"/>
            </div>

            <button onclick="login.submit()">Registrarse</button>

            <?php if (!empty($errores)) : ?>
                <div class="error">
                    <?php $errores; ?>
                </div>
            <?php endif; ?>
        </form>

        <p>¿Ya tienes cuenta? <a href="login.php">Iniciar sesión</a></p>
    </div>
</body>
</html>