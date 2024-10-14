<?php
    $hostname='dtai.uteq.edu.mx';
    $database='bd_awos_gonosc221';
    $username='gonosc221';
    $password='gmo@2023371091';

    $conexion=new mysqli($hostname,$username,$password,$database);
    if($conexion->connect_errno){
        echo "El sitio web está experimentando problemas";
    }
?>
