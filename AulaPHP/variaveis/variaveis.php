<?php 

$acesa = false;

if($acesa){
    print("Primeiro IF, Acesa </br>");
}

$acesa = true;

if($acesa){
    print("Segundo IF, Acesa </br>");
}

$variavelInteira = -1234;
echo $variavelInteira ."</br>";

$notaAv1 = 4.5;
$notaAv2 = 9.5;
echo ($notaAv1 + $notaAv2)/2 ."<br>";

$lista = array("Abel" => "075",
 "Luisa" => "123123");

echo $lista["Abel"] ."<br>";
echo $lista["Luisa"];

?>