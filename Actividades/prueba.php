<?php
$estante = [
    ["nombre"=>"cien_años_de_soledad"],
    ["nombre"=>"el amor en los tiempos del cólera"],
    ["nombre"=>"1984" ],
    ["nombre"=>"don quijote de la mancha" ],
    ["nombre"=>"el principito" ],
];

$nombreLibro=$_GET['nombre'];
function buscarLibro($estante, $nombreLibro) {
    foreach ($estante as $key => $value) {
        if ($value['nombre'] == $nombreLibro) {
            return $value;

        }
    }return null;
}
$libro=buscarLibro($estante, $nombreLibro);
echo $libro===null? "Libro no encontrado":"Libro encontrado: ". $libro['nombre'];

?>