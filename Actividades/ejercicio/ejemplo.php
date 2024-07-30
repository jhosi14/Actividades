<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: url('https://img.freepik.com/foto-gratis/fondo-galaxia-estilo-fantasia_23-2151114372.jpg?w=1060&t=st=1720200583~exp=1720201183~hmac=da8675135e0eb4d85ebe63d780e4b44aa593eaf2e2a764598ba8117ac7bae770') no-repeat center center fixed;
            background-size: cover;
        }
        @keyframes moveUpDown {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }
        .container {
            background-color: rgba(255, 255, 255, 0.8); /* Fondo blanco semi-transparente */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 80%;
            max-width: 400px;
            animation: moveUpDown 3s ease-in-out infinite;
        }
        h1 {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }
        p {
            font-size: 18px;
            color: #333;
            margin: 10px 0;
        }
        .flag {
            width: 30px;
            height: auto;
            vertical-align: middle;
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Formulario de Información</h1>
        <?php
            echo '<p>Nombre: Jhoselyn </p>';
            echo '<p>Apellido: Fernandez Ojeda</p>';
            echo '<p>Carrera: Sistemas</p>';
            echo '<p>Equipo a ganar: Alemania <img src="https://upload.wikimedia.org/wikipedia/en/b/ba/Flag_of_Germany.svg" alt="Alemania" class="flag"></p>';
        ?>
    </div>
</body>
</html>
