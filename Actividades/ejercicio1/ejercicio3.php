<?php
//array de una dimension
$platos=array("saice","sopa","pescado");
$platos=["saice","sopa","chancho"];

echo"</pre>";
var_dump($platos);
echo "</pre>";
var_dump($platos);
// inesertar datos
$platos[2]="Nuevo plato";
$platos[3]="chancho";
//insertr al inicio
array_unshift($platos,"jugos");

//insertar al final
array_push($platos,"ensaldas");
echo"</pre>";
var_dump($platos);
echo "</pre>";

$electrodomesticos=[
    "nombre"=>"televisor",
    "modelo"=> "LG",
    "precio"=>450,
    "pulgadas"=>16,
    "procedencia"=> "china",
    "accesorios"=>[
        "game"=>"si",
        "smart"=>"no",
        "control"=>"si",
        
    ]
];

echo "<pre>";
var_dump($electrodomesticos);
echo "</pre>";

echo $electrodomesticos["nombre"]."<br>".
$electrodomesticos["precio"]."<br>".$electrodomesticos["accesorios"]["smart"];
echo "<br>";
echo "SEGUNDA FORMA";
$electrodomesticos=array(
    "nombre"=>"televisor",
    "modelo"=> "LG",
    "precio"=>450,
    "pulgadas"=>16,
    "procedencia"=> "china",
    "accesorios"=>[
        "game"=>"si",
        "smart"=>"no",
        "control"=>"si",
        
    ]
);

echo "<pre>";
var_dump($electrodomesticos);
echo "</pre>";

echo $electrodomesticos["nombre"]."<br>".
$electrodomesticos["precio"]."<br>".$electrodomesticos["accesorios"]["smart"];

$electrodomesticos["accesorios"]["usb"]="si";
echo "</pre>";
var_dump($electrodomesticos);
echo "</pre>";
//maenejar los indices
$clientes=[];
var_dump(empty($platos));
var_dump(empty($electrodomesticos));
var_dump(empty($clientes));
echo "<br>";
echo "</pre>";
echo "isset pregunta si ah sido declarado";
var_dump(isset($clientes));
echo "<br>";
echo "</pre>";
echo "electrodomesticos con isset";
var_dump(isset($electrodomesticos["procedencia"]));

//ordenar menor a mayor
sort($platos);
echo "</pre>";
var_dump($platos);
echo "</pre>";

//ordenar de mayor a menor
rsort($platos);
echo "</pre>";
var_dump($platos);
echo "</pre>";

//ordenar array de multiples dimensiones al orden alfabeitco ascenente por el valort
asort($electrodomesticos);
echo "</pre>";
var_dump($electrodomesticos);
echo "</pre>";

//ordenar array de multiples dimensiones de orden alfabetico de descendete por sus valores
arsort($electrodomesticos);
echo "</pre>";
var_dump($electrodomesticos);
echo "</pre>";

//ordenar array de dos dimensiones indices de acuerdo al orden albatico asc
ksort($electrodomesticos);
echo "</pre>";
var_dump($electrodomesticos);
echo "</pre>";

//ordenar array de dos dimensiones indices de acierdo al orden alfabetico desc
krsort($electrodomesticos);
echo "</pre>";
var_dump($electrodomesticos);
echo "</pre>";


?>