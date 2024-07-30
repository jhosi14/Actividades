<?php
if(isset($_POST['bandera'])){
    $archivo=$_FILES['archivo']['name'];
    $archivo=$_FILES['archivo']['type'];
    $archivo=$_FILES['archivo']['size'];
    echo "Filename: " . $_FILES['archivo']['name'] . "<br>";
    echo "Type: " . $_FILES['archivo']['type'] . "<br>";
    echo "Size: " . ($_FILES['archivo']['size'] / 1024) . " Kb<br>";
    echo "Temp name: " . $_FILES['archivo']['tmp_name'];
    echo "Error: " . $_FILES['archivo']['error'];
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulario Expediente</title>
</head>
<body>
    <h2>Subir Archivo</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="archivo">Selecciona un archivo:</label>
        <input type="file" name="archivo" id="archivo">
        <input type="hidden" value="" name="bandera">
        <input type="submit" value="Subir Archivo" name="submit">
    </form>
</body>
</html>