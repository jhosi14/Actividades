<?php
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

echo (strlen($usuario) >= 10) ?'Bienvenido '.$usuario:'El usuario no es valido <br>';
$numeros = [0,1,2,3,4,5,6,7,8,9];
$c=0;

foreach($numeros as $num){
  if(strpos($contrasena,$num)!==false){
    $c++;
  };
}
echo ($c>0) ?'La contrasena es valida <br>':'La contraseña no es valida <br>';
?>
