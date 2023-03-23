<?php
    $hostname='localhost';
    $username='root';
    $password='';
    $database='proyecto_res';

    try{
        $conn=new PDO("mysql:host=$hostname;dbname=$database;",$username, $password);
    }catch(PEDOException $e){
        die('Conexion fallida: '.$e->getMessage());
    }
?>