<?php session_start();

if (isset($_SESSION['correo'])) {
    header('Location: content.php');
} else{
    header('Location: login.php');
}

?>