<?php
$archivo="prueba2.txt";
echo (touch($archivo))?"Archivo existe": "Archivo no existe";
$datos=fopen($archivo,'w');
var_dump($datos);
if (touch($archivo)){
    fwrite($datos,'Hoy es lunes');
    fclose($datos);
} 
$datos=fopen($archivo,'r');
while (!feof($datos)) {
    $line=fgets($datos,1024);
    echo $linea, "<br>";
}

fclose($datos);

?>