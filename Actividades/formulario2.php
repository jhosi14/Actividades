<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'] ?? '';
    $apellido = $_POST['apellido'] ?? '';
    $carrera = $_POST['carrera'] ?? '';

    $datos = "Nombre: $nombre\nApellido: $apellido\nCarrera: $carrera\n";

    $archivo = dirname(__FILE__) . '/datos_guardados.txt';
    file_put_contents($archivo, $datos, FILE_APPEND);

    echo "Datos guardados correctamente.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulario de Datos</title>
</head>
<body>
    <h2>Ingresa tus datos</h2>
    <form action="" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required><br><br>
        
        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" id="apellido" required><br><br>
        
        <label for="carrera">Carrera:</label>
        <input type="text" name="carrera" id="carrera" required><br><br>
        
        <input type="submit" value="Guardar Datos">
    </form>
</body>
</html>

