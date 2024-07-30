<?php
$cliente="Juan Perez";
//Saber el tamaño de la cadena 
print(strlen($cliente));
echo"<br>";
var_dump($cliente) ;
//limpiar espacios en blanco
$texto="Jose Lopez";
var_dump($texto);
$texto2=strlen(trim($texto));
echo"<br>";
echo $texto2."<br>";
//Convertir minusculas y mayusculas
echo (strtolower($cliente));
echo "<br>";
echo (strtolower($texto));
var_dump(strtolower($cliente)===strtolower($texto));
//reemplazar 
echo "<br>";
echo str_replace("Juan","Jose", $cliente);
//Buscar posiscion
echo "<br>";
echo strpos($cliente,"Pedro");
//Buscar
echo substr_count($cliente,"e");
//dividir cadena
$cadena=explode("e", $texto);
var_dump($cadena);
//unir cadena
$cadena=implode("e",$cadena);
var_dump($cadena);

// Escribir usuario, contraseña, repetir contraseña, comparar si las contraseñas son iagulaes verificar tamaño 
//de la cadena usuario dividir en 3 partes buscar si la variable 'm' existen en las tres divisiones y reemplazarla .  
?>