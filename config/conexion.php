<?php
    $hostname='localhost';
    $database='INARI';
    $username='root';
    $password='';

    $conexion=new mysqli($hostname,$username,$password,$database);
    if($conexion->connect_errno){
        echo "El sitio web está experimentando problemas";
    }
?>
