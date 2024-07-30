<?php
$valor = '';
$datos = '';

if (isset($_POST["nombre"]) && isset($_POST["password"])) {
    // Declaración de la cookie
    $nombre = 'galleta';
    $valor = $_POST['nombre'] . "|" . $_POST['password'];
    $fecha = time() + 60 * 60 * 24;
    setcookie($nombre, $valor, $fecha);
}

// Verificar si la cookie existe
if (isset($_COOKIE['galleta'])) {
    // Descomponer los valores de la cookie
    $datos = explode('|', $_COOKIE['galleta']);
    $nombre = $datos[0];
    $password = $datos[1];

    // Destruir la cookie "galleta"
setcookie("galleta", "", time() - 3600);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="nombre" value="<?php echo isset($_POST['remember']) ? $nombre : ''; ?>">
        
        <input type="password" name="password" value="<?php echo isset($_POST['remember']) ? $password : ''; ?>">

        <input type="checkbox" name="remember">recordar

        <input type="submit" value="enviar">
    </form>
    <p>
        <?php
        if (isset($_COOKIE['galleta'])) {
            echo "Nombre: $nombre <br>";
            echo "Password: $password";
        }
        ?>
    </p>
</body>

</html>