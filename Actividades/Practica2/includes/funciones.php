<?php

require_once("conexion.php");

function insertar($nombre, $apellido, $telefono) {
    $conn = conectar(); 
    $sql = "INSERT INTO usuario (Nombre, Apellido, Telefono) VALUES ('$nombre', '$apellido', $telefono)";
    mysqli_query($conn, $sql);
}

function listar(){
    $conn = conectar(); 
    $sql="SELECT * FROM USUARIO";
    $r=mysqli_query($conn, $sql);
    $usuarios = [];
    while ($row = mysqli_fetch_assoc($r)) {
        $usuarios[] = $row; 
    }

    mysqli_close($conn);
    return $usuarios; 
}
?>


