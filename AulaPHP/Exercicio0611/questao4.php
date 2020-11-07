<?php
$nome = $_GET['nome'];
$dias = $_GET['dias'];
$diaria10Mais = 40 + $dias*8;
$diaria10OuMenos = 40 + $dias*15;

if ($dias >= 10) {
    Echo "Cliente: ".$nome ."<br>";
    Echo "Conta: R$".$diaria10Mais;
} else {
    Echo "Cliente: " .$nome ."<br>";
    Echo "Conta: R$" .$diaria10OuMenos;
}
?>