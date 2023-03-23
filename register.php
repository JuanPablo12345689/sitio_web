<?php session_start();

if (isset($_SESSION['id_usuario'])) {
    header('Location: content.php');
} 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre_usuario = $_POST['nombre_usuario'];
    $correo = filter_var(strtolower($_POST['correo']), FILTER_SANITIZE_STRING);
    $password = $_POST['contrasena'];
    $password2 = $_POST['confirmar_contrasena'];

    $errores = '';
 
    if (empty($correo) || empty($nombre_usuario) || empty($password) || empty($password2)) {
        $errores .= '<li>*Hay campos vacios</li>';
    } else {
        try {
            $conexion = new PDO('mysql:host=localhost;dbname=proyecto_res', 'root', '');

        } catch (PDOException $e){
            echo "ERROR: " . $e -> getMessage();
        }

        $statement = $conexion -> prepare("SELECT id_usuario, correo, contrasena FROM usuarios WHERE correo=:correo");
        //$statement -> execute([$correo]);
        $statement->bindParam(':nombre_usuario',$_POST['nombre_usuario']);
        $statement->bindParam(':correo',$_POST['correo']);
        //$statement -> execute();
        $result = $statement -> fetch();

        if ($result != false) { //Sí el usuario existe
            $errores .= '<li>Ya existe éste usuario.</li>';
        }

        $password = hash('sha512', $password);
        $password2 = hash('sha512', $password2);

        if ($password != $password2) {
            $errores .= '<li>Las contraseñas deben coincidir.</li>';
        }
    }

    if ($errores == '') {
        $statement = $conexion -> prepare('INSERT INTO usuarios (nombre_usuario, correo, contrasena) VALUES  (:nombre_usuario, :correo, :contrasena)');
        //$statement -> execute([$nombre_usuario, $correo,  $password]);
        $statement->bindParam(':nombre_usuario',$_POST['nombre_usuario']);
        $statement->bindParam(':correo',$_POST['correo']);
        $statement->bindParam(':contrasena',$_POST['contrasena']);
        $statement -> execute();
        $result = $statement -> fetch();
        header('Location: login.php');
    }
}


require 'views/register.view.php';

?>