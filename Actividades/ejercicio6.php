<?php
/*$nombre = $_GET['nombre'];
$monto=$_GET['cantidad'];
$edad=$_GET['edad'];
$monto_iva=0;
function ConIva(int $monto):float
{
    $monto_iva=$monto+($monto*0.13);
    return $monto_iva;
}
function SinIva(int $monto):float{
    $monto_iva=$monto-($monto*0.13);
    return $monto_iva;
}
try{
    echo "Resultado".(($iva=="true")?(ConIva($monto)):(SinIva($monto)));
} catch(TypeError $e){
    echo "Error".$e->getMessage();
}
echo "Edad" .($edad>=18)?"Puedes realizar la compra": "No puedes realizar la compra";*/

//segundo ejercicio
//array de notas y calcular el promedio de 10 estudiantes

function promedio(int |float ...$notas): int |float{
    $suma=0;
    $promedio=0;
    foreach($notas as $nota){
        $suma+=$nota;
    }
    return $promedio=$suma/count($notas);
}
echo "El promedio de las notas es: ".promedio(34,45,21,56,89,76,45,34,12,78,22)
?>