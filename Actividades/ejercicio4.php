<?php
$competidores = array(
    "competidor1" => array(
        "nombre" => "Fernando",
        "hora_llegada" => 1800  // 00:30:00 en segundos
    ),
    "competidor2" => array(
        "nombre" => "Carla",
        "hora_llegada" => 1935  // 00:32:15 en segundos
    ),
    "competidor3" => array(
        "nombre" => "Ricardo",
        "hora_llegada" => 1725  // 00:28:45 en segundos
    ),
    "competidor4" => array(
        "nombre" => "Alejandro",
        "hora_llegada" => 2150  // 00:35:50 en segundos
    ),
    "competidor5" => array(
        "nombre" => "Damaris",
        "hora_llegada" => 1770  // 00:29:30 en segundos
    )
);


usort($competidores, function($a, $b) {
    return $a["hora_llegada"] - $b["hora_llegada"];
});


$ganador = $competidores[0];
$segundo = $competidores[1];


$diferencia = $segundo["hora_llegada"] - $ganador["hora_llegada"];

$ultimo = end($competidores);

$primer_lugar = $competidores[0]["nombre"];
$segundo_lugar = $competidores[1]["nombre"];
$tercer_lugar = $competidores[2]["nombre"];


echo "<pre>";
var_dump($competidores);
echo "</pre>";


echo "Ganador: " . $ganador["nombre"] . " con un tiempo de " . $ganador["hora_llegada"] . " segundos<br>";
echo "Diferencia entre el primer y segundo lugar: " . $diferencia . " segundos<br>";
echo "Último en llegar: " . $ultimo["nombre"] . " con un tiempo de " . $ultimo["hora_llegada"] . " segundos<br>";
echo "Primeros tres lugares:<br>";
echo "1. " . $primer_lugar . "<br>";
echo "2. " . $segundo_lugar . "<br>";
echo "3. " . $tercer_lugar . "<br>";





?>