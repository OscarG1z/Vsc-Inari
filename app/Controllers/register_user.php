<?php
    include '../../config/conexion.php';

    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];
    $estatus = 1; // Puedes establecer un valor predeterminado
    $perfil = 1; // Puedes establecer un valor predeterminado
    $sesion = 0; // Puedes establecer un valor predeterminado

    $sentencia = $conexion->prepare("INSERT INTO USUARIOS (NOMBRE, CORREO, CONTRASEÑA, ESTATUS, PERFIL, SESION) VALUES (?, ?, ?, ?, ?, ?)");
    $sentencia->bind_param('ssssss', $nombre, $correo, $contraseña, $estatus, $perfil, $sesion);

    if ($sentencia->execute()) {
        echo json_encode(["success" => true]);
    } else {
        echo json_encode(["success" => false, "error" => $conexion->error]);
    }

    $sentencia->close();
    $conexion->close();
