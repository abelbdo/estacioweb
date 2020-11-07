<?php

$nome = $_GET['nome'];
$av1 = $_GET['av1'];
$av2 = $_GET['av2'];
$media = ($av1+$av2)/2;

if ($media < 3) {
    echo "Olá, "  .$nome .". Sua média foi: " .$media ."<br>Você está reprovado!";
} elseif ($media<7 && $media >=3) {
    echo "Olá, ".$nome .". Sua média foi: " .$media ."<br> Você irá realizar exame";
} elseif ($media >= 7) {
    echo "Olá, ".$nome .". Sua média foi: " .$media ."<br> Você está aprovado";
}

?>