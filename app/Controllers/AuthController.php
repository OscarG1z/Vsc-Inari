<?php
    include '../../config/conexion.php';
    $usu_correo = $_POST['correo']; // Cambia 'usuario' a 'correo'
    $usu_contraseña = $_POST['contraseña']; // Cambia 'password' a 'contraseña'

    // Prepara la consulta para seleccionar el usuario
    $sentencia = $conexion->prepare("SELECT * FROM USUARIOS WHERE CORREO=? AND CONTRASEÑA=?");
    $sentencia->bind_param('ss', $usu_correo, $usu_contraseña);
    $sentencia->execute();

    $resultado = $sentencia->get_result();

    if ($fila = $resultado->fetch_assoc()) {
        // Si se encontró el usuario, devuelve "success"
        echo "success";
    } else {
        // Si no se encontró el usuario, devuelve "error"
        echo "error";
    }

    $sentencia->close();
    $conexion->close();
?>
