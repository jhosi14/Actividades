<?php
$compra = $_GET['c'];
$puntos = 0;

switch (true) {
    case ($compra > 50 && $compra <= 100):
        $puntos = 5;
        break;
    case ($compra > 100 && $compra <= 200):
        $puntos = 15;
        break;
    case ($compra > 200 && $compra <= 500):
        $puntos = 30;
        break;
    case ($compra > 500):
        $puntos = 60;
        break;
    default:
        $puntos = 0;
        break;
}

echo "Las compras " . $compra . " tienen " . $puntos . " puntos";
?>
