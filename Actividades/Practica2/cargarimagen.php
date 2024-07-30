<?php
require("includes/conexion.php");
$conn = conectar(); 

if (isset($_FILES['imagen']['tmp_name']) && is_uploaded_file($_FILES['imagen']['tmp_name'])){
    $imagen_array = getimagesize($_FILES['imagen']['tmp_name']);
    $imagen_cargada = file_get_contents($_FILES['imagen']['tmp_name']);
    $imagen_cargada = addslashes($imagen_cargada);
    $sql = "INSERT INTO imagenes (ancho, altura, tipo, imagen, nombre) 
            VALUES ('".$imagen_array[0]."', '".$imagen_array[1]."', '".$_FILES['imagen']['type']."', 
            '".$imagen_cargada."', '".$_FILES['imagen']['name']."')";
            
    $r = mysqli_query($conn, $sql);
    echo ($r) ? "Datos insertados correctamente" : "Error al insertar datos";
    mysqli_close($conn); 
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cargar Imagen</title>
    </head>
    <body>
        <form action="" method="post" enctype="multipart/form-data">
            <label for="imagen">Selecciona una imagen:</label>
            <input type="file" name="imagen" id="imagen" required>
            <input type="submit" value="Subir Imagen">
        </form>
    </body>
</html> 