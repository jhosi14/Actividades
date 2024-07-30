<?php
    
$usuario = isset($_GET['usuario']) ? $_GET['usuario'] : '';
$contraseña = isset($_GET['contraseña']) ? $_GET['contraseña'] : '';
$repetirContraseña = isset($_GET['repetir_contraseña']) ? $_GET['repetir_contraseña'] : '';
    
$contraseñasCoinciden = ($contraseña === $repetirContraseña);

function dividirYReemplazar($usuario) {
    $tamañoParte = str_split($usuario, ceil(strlen($usuario) / 3));
    return 
    $tamañoParte
    ;
}
  
$divisiones = dividirYReemplazar($usuario);


echo "<p>Usuario: $usuario</p>";
echo "<p>Contraseñas coinciden: " . ($contraseñasCoinciden ? 'true' : 'false') . "</p>";
print_r($divisiones) ;
var_dump(strpos($divisiones[0], 'm'));
var_dump(strpos($divisiones[1], 'm'));
var_dump(strpos($divisiones[2], 'm'));


?>
