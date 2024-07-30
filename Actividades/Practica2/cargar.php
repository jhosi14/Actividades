<?php
require("includes/conexion.php");


$archivo = fopen("datos.csv", "r");

if (!$archivo) {
    die("Error al abrir el archivo datos.csv. Verifica la ruta y nombre del archivo.");
}

$conn = conectar();
$bandera = true;
$i = 0;


while (($data = fgetcsv($archivo)) !== false) {
    
    if ($bandera) {
        $bandera = false;
        continue;
    }

    if ($data) {
        $descripcion = mysqli_real_escape_string($conn, $data[1]);
        $nombre = mysqli_real_escape_string($conn, $data[2]);
        $pais = mysqli_real_escape_string($conn, $data[3]);
        $acierto = (int)$data[4];
        $estado = mysqli_real_escape_string($conn, $data[5]);

        
        $sql = "INSERT INTO PREGUNTAS (descripcion, nombre, pais, acierto, estado) VALUES ('$descripcion', '$nombre', '$pais', $acierto, '$estado')";
        $r = mysqli_query($conn, $sql);
        echo ($r) ? "Insertó correctamente: $i registros.<br>" : "Error al insertar en el registro $i.<br>";
    }

    $i++;
}

fclose($archivo);
mysqli_close($conn);

?>
