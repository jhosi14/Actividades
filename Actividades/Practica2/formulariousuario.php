<?php
require("includes/funciones.php");

$errors = []; 


if($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if(empty($_POST['nombre'])) {
        $errors['nombre'] = "El nombre es requerido.";
    } elseif(strlen($_POST['nombre']) > 20) {
        $errors['nombre'] = "El nombre debe tener hasta 20 caracteres.";
    }

    if(empty($_POST['apellido'])) {
        $errors['apellido'] = "El apellido es requerido.";
    } elseif(strlen($_POST['apellido']) > 20) {
        $errors['apellido'] = "El apellido debe tener hasta 20 caracteres.";
    }

    if(empty($_POST['telefono'])) {
        $errors['telefono'] = "El teléfono es requerido.";
    } elseif(!is_numeric($_POST['telefono']) || strlen($_POST['telefono']) > 11) {
        $errors['telefono'] = "El teléfono debe ser un número y no debe exceder los 11 caracteres.";
    }

    
    if(empty($errors)) {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $telefono = $_POST['telefono'];

        insertar($nombre, $apellido, $telefono);
        echo "Datos guardados correctamente.";
        
        $nombre = $apellido = $telefono = "";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Usuario</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            font-weight: bold;
            color: #555;
        }

        input[type="text"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .error {
            color: red;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h2>Formulario de Usuario</h2>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
        <?php if(isset($errors['general'])): ?>
            <p class="error"><?php echo $errors['general']; ?></p>
        <?php endif; ?>
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" maxlength="20" value="<?php echo isset($_POST['nombre']) ? $_POST['nombre'] : ''; ?>" ><br>
        <?php if(isset($errors['nombre'])): ?>
            <p class="error"><?php echo $errors['nombre']; ?></p>
        <?php endif; ?>

        <label for="apellido">Apellido:</label><br>
        <input type="text" id="apellido" name="apellido" maxlength="20" value="<?php echo isset($_POST['apellido']) ? $_POST['apellido'] : ''; ?>" ><br>
        <?php if(isset($errors['apellido'])): ?>
            <p class="error"><?php echo $errors['apellido']; ?></p>
        <?php endif; ?>

        <label for="telefono">Teléfono:</label><br>
        <input type="text" id="telefono" name="telefono" value="<?php echo isset($_POST['telefono']) ? $_POST['telefono'] : ''; ?>" ><br>
        <?php if(isset($errors['telefono'])): ?>
            <p class="error"><?php echo $errors['telefono']; ?></p>
        <?php endif; ?>

        <input type="submit" value="Guardar">
    </form>
</body>
</html>
