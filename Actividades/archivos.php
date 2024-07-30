<?php
$carpeta="prueba/";
$archivo="ejercicio4.php";
echo (file_exists($carpeta.$archivo))?"Archivo existe": "Archivo no existe <br>";

echo (is_file($archivo))?"Archivo existente": "Archivo no existente <br>";
echo (is_dir($carpeta))?"Carpeta existente": "Carpeta no existente <br>";

///
$archivo2= "nino.jpg";
if(file_exists($carpeta.$archivo2)){
    $size=filesize(($carpeta.$archivo2));
    $creado=filectime($carpeta.$archivo2);
    $modificado=filemtime($carpeta.$archivo2);
    $acceso=fileatime($carpeta.$archivo2);
    $sizeInMb = round($size / 1024 / 1024, 2);
    $creado = date('Y-m-d H:i:s', filectime($carpeta . $archivo2));
    $modificado = date('Y-m-d H:i:s', filemtime($carpeta . $archivo2));
    $acceso = date('Y-m-d H:i:s', fileatime($carpeta . $archivo2));
    echo "El archivo tiene un tamaño de $sizeInMb MB, fue creado el $creado <br>, 
    fue modificado por última vez el $modificado y fue accedido por última vez el $acceso.";
}



?>