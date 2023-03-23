<?php session_start();

if (isset($_SESSION['id_usuario'])) {
    header('Location: content.php');
}

$errores = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $correo = filter_var(strtolower($_POST['correo']), FILTER_SANITIZE_STRING);
    $password = hash('sha512' , $_POST['contrasena']);

    try {
    $conexion = new PDO('mysql:host=localhost;dbname=proyecto_res', 'root', '');

    } catch (PDOException $e){
        echo "ERROR " . $e -> getMessage();
    } 
    
    $statement = $conexion -> prepare('SELECT * FROM usuarios WHERE correo=:correo AND contrasena=:contrasena ');
    $statement->bindParam(':correo', $_POST['correo']);
    $statement->bindParam(':contrasena', $_POST['contrasena']);
    $statement -> execute();
    //$statement -> execute([$correo, $password]);
    $result = $statement -> fetch();

    if ($result !== false) {
        $_SESSION['id_usuario'] = $result['id_usuario'];
        header('Location: index.php');
    } else {
        $errores .= '<li>ERROR: el usuario y/o contraseña son incorrectos</li>';
    }
}

require 'views/login.view.php';

?>