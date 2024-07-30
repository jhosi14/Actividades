<?php
// Sentencia if convertida a ternaria
$compra = $_GET['c'];
$puntos = ($compra > 50 && $compra <= 100) ? 5 : 
          (($compra > 100 && $compra <= 200) ? 15 : 
          (($compra > 200 && $compra <= 500) ? 30 : 
          (($compra > 500) ? 60: 0)));
          

echo "Las compras ".$compra." tienen ".$puntos." puntos";
?>
