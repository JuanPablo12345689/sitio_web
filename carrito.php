<?php
session_start();
if(isset($_POST['id'])){
    $id=$_POST['id'];

    if(isset($_SESSION['ordenar']['nombre_menu'][$id])){
        $_SESSION['ordenar']['nombre_menu'][$id] += 1;
    }
    $_SESSION['ordenar']['nombre_menu'][$id]=1;

    $datos['numero']=count($_SESSION['ordenar']['nombre_menu']);
    $datos['ok']=true;
}else{
    $datos['ok']=false;
}

echo json_encode($datos);

?>