<?php
$filas = $_GET['filas']; // Número de filas del triángulo

// fila del triángulo
for ($i = 1; $i < $filas; $i++) {
    
    echo str_repeat(" ", $filas - $i - 1);
    echo"<br>";
    for ($j = 1; $j <= $filas-$i; $j++) {
        echo " ";  
    }
    for ($j = 1 ; $j <=2 * $i -1; $j++) {
        echo "*";    
    }
   
    echo "\n"; 
}
?>
