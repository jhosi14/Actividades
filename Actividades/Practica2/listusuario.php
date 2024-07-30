<?php
require_once("includes/conexion.php");
require_once("includes/funciones.php"); 


$usuarios = listar();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Usuarios</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }

        .card {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin: 10px;
            padding: 20px;
            display: inline-block;
            width: calc(33% - 40px);
            box-sizing: border-box;
        }

        .card h5 {
            margin: 0 0 10px;
            font-size: 1.2em;
            color: #333;
        }

        .card p {
            margin: 0;
            color: #666;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        @media (max-width: 768px) {
            .card {
                width: calc(50% - 20px);
            }
        }

        @media (max-width: 480px) {
            .card {
                width: 100%;
                margin: 10px 0;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Lista de Usuarios</h2>
    <div class="row">
        <?php if (is_array($usuarios) && !empty($usuarios)): ?>
            <?php foreach ($usuarios as $usuario): ?>
                <div class="card">
                    <h5><?php echo $usuario['Nombre'] . ' ' . $usuario['Apellido']; ?></h5>
                    <p><strong>Teléfono:</strong> <?php echo $usuario['Telefono']; ?></p>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No hay usuarios para mostrar.</p>
        <?php endif; ?>
    </div>
</div>

</body>
</html>
