<?php
/*//sentencia if 
$compra=$_GET['c'];
$puntos=0;
if ($compra>50 && $compra<=100) {
    $puntos=$puntos+5;
}
else if ($compra > 100 && $compra<= 200) {
    $puntos=$puntos+ 15;
}
else if ($compra > 200 && $compra<= 500){
    $puntos=$puntos+ 30;

}
else  {
    $puntos=$puntos+ 60;
}

echo "Las compras ".$compra." tienen ".$puntos. "puntos";
*/
/*
//sentencia while 
$inferior=$_GET['i'];
$superior=$_GET['s']; 
$c=0;
while ($inferior <= $superior) {
    echo $inferior;
    if ($inferior%7==0) {
        $c++;
    }
    $inferior++;

}
echo "contador: ".$c;
*/
/*// dowhile
$inferior = $_GET['i'];
$superior = $_GET['s'];
$c = 0;

do {
    echo $inferior;
    if ($inferior % 7 == 0) {
        $c++;
    }
    $inferior++;
} while ($inferior <= $superior);

echo "contador: " . $c;
*/
// foreach
$electrodomesticos=[
    ["nombre"=>"televisor",
    "precio"=>400,
    "estado"=> true,
    ],
    ["nombre"=>"heladera",
    "precio"=>300,
    "estado"=> false,
    ],
    ["nombre"=>"bicicleta",
    "precio"=>100,
    "estado"=> true,
    ]
];
echo"<br>";
echo "foreach";
echo"<br>";
foreach($electrodomesticos as $productos) {
    echo $productos['nombre']."<br>";
    echo $productos['precio']."<br>";
    echo ($productos['estado'])?"Disponible": "No disponible"."<br>";
}
echo"<pre>";
var_dump($electrodomesticos);
echo "</pre>";

?>


