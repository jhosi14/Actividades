<?php
$ventas = [
    ["cliente" => "Cliente A", "tipo" => "Pizza 1"],
    ["cliente" => "Cliente B", "tipo" => "Pizza 2"],
    ["cliente" => "Cliente A", "tipo" => "Pizza 3"],
    ["cliente" => "Cliente C", "tipo" => "Pizza 2"],
    ["cliente" => "Cliente D", "tipo" => "Pizza 1"],
    ["cliente" => "Cliente E", "tipo" => "Pizza 2"],
    ["cliente" => "Cliente F", "tipo" => "Pizza 3"],
   
];

$gastos = [
    "merienda" => 50,
    "alquiler" => 1500,
];

$precios = [
    "Pizza 1" => 85,
    "Pizza 2" => 90,
    "Pizza 3" => 95,
];

$total_ventas = 0;
$ventas_por_tipo = [];
$clientes_repetidos = [];

foreach ($ventas as $venta) {
    $tipo = $venta['tipo'];
    $cliente = $venta['cliente'];

    $total_ventas += $precios[$tipo];

    if (!isset($ventas_por_tipo[$tipo])) {
        $ventas_por_tipo[$tipo] = 0;
    }
    $ventas_por_tipo[$tipo]++;

    if (!isset($clientes_repetidos[$cliente])) {
        $clientes_repetidos[$cliente] = 0;
    }
    $clientes_repetidos[$cliente]++;
}

$total_gastos = $gastos['merienda'] + $gastos['alquiler'];

$ganancia_neta = $total_ventas - $total_gastos;


echo "Total vendido: ". $total_ventas."<br>";
echo "Ventas por tipo de pizza:<br>";
foreach ($ventas_por_tipo as $tipo => $cantidad) {
    $total_por_tipo = $cantidad * $precios[$tipo]; 
    echo "$tipo:"."cantidad: " .$cantidad. " (Total: $total_por_tipo)<br>";
}
echo "Ganancia neta: " .$ganancia_neta."<br>";

echo "Clientes que repitieron la pizza:<br>";
foreach ($clientes_repetidos as $cliente => $cantidad) {
    if ($cantidad > 1) {
        echo "Este cliente repitio mas : ".$cliente."<br>";
    }
}
?>
