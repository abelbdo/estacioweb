<?php 
$cliente = $_GET["cliente"];
$diaria = $_GET["diaria"];
$txMenosDez = 15 * $diaria;
$txDezMais = 8 * $diaria;
$precoDiaria = 40 * $diaria;
$total1 = $precoDiaria + $txMenosDez;
$total2 = $precoDiaria + $txDezMais;


if($diaria < 10) {
        echo "A conta do cliente ".$cliente. " deu R$" .$total1;
} elseif ($diaria >= 10) {
        echo "A conta do cliente ".$cliente. " deu R$" .$total2;
    };

?>
