<?php
/*$nombre="Jhose";
$talla= 1.60;
$peso = 60;
$musica = array("Evanecence","Billie");
$bandera = true;
print("nombre: ".$nombre."<br>");
printf("nombre ".$talla."<br>");
print_r("nombre ".$peso."<br>");
echo("nombre ".$bandera."<br>");
var_dump($musica);

/*operadores*/
/*$a=4;
$b=3;
$a=$_GET['A'];
$b=$_GET['B'];
echo ("el resultado de la suma es :".$a+$b."<br>");
echo ("el resiltado de la resta es:".$a-$b."<br>");
echo ("el resultado de la multiplicacion es: ".$a*$b."<br>");
echo ("el resultado de la division es: ".$a/$b."<br>");
echo ("el resultado del modulo es: ".$a%$b."<br>");

/*Comparativos 
var_dump($a>$b);
echo("<br>");
var_dump($a<$b);
echo("<br>");
var_dump($a<$b);
echo("<br>");
var_dump($a<=$b);
echo("<br>");
var_dump($a>=$b);
echo("<br>");
var_dump($a==$b);
echo("<br>");
var_dump($a<=>$b);*/

/*PRACTICA LLENAR DOS ARRAYS DESDE EL NAVEGADOR UNO DE LETRAS Y OTRO DE NUMEROS Y COMPARAR CUAL 
ES EL MENOR Y PONER A QUE LETRA LE CORREXPONDA*/
$var=$_GET["var"];
$var2=$_GET["var2"];
$var3=$_GET["var3"];
$varl1=$_GET["varl1"];
$varl2=$_GET["varl2"];
$varl3=$_GET["varl3"];

$data = array($var, $var2, $var3);
$data2 = array($varl1, $varl2, $varl3);

echo $data[0]." es menor que ".$data[1] .var_dump($data[0] < $data[1]) . '<br>';
echo $data[0]. " es igual que " .$data[1] .var_dump($data[0] == $data[1]) . '<br>';
echo $data[0]. " es mayor que " .$data[1] .var_dump($data[0] > $data[1]) . '<br>';

echo $data[0]." es menor que ".$data[2] .var_dump($data[0] < $data[2]) . '<br>';
echo $data[0]. " es igual que " .$data[2] .var_dump($data[0] == $data[2]) . '<br>';
echo $data[0]. " es mayor que " .$data[2] .var_dump($data[0] > $data[2]) . '<br>';

echo $data[1]." es menor que ".$data[2] .var_dump($data[1] < $data[2]) . '<br>';
echo $data[1]. " es igual que " .$data[2] .var_dump($data[1] == $data[2]) . '<br>';
echo $data[1]. " es mayor que " .$data[2] .var_dump($data[1] > $data[2]) . '<br>';

?>



