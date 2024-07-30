<?php

require("includes/funciones.php");

if(isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['telefono'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $telefono = $_POST['telefono'];

   
    if(strlen($nombre) > 20 || strlen($apellido) > 20 || empty($nombre) || empty($apellido)) {
        echo "Error: El nombre y apellido deben tener hasta 20 caracteres y no pueden estar vacíos.";
    } elseif (!is_numeric($telefono) || strlen($telefono) > 11  ) {
        echo "Error: El teléfono debe ser un número y no debe pasar de 11.";
    } else {
        
        insertar($nombre, $apellido, $telefono);
        echo "Datos guardados correctamente.";
    }
} else {
    echo "Error: Todos los campos son requeridos.";
}
?>
