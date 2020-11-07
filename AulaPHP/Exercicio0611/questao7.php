<?php
$area = $_GET['area'];
$litroArea = $area/6;
$galao = 3.6;
$lata = 18;
$precoLata = 80;
$precoGalao = 25;
$valorGalao = $litroArea / $galao  * $precoGalao;
$valorLata = $litroArea / $lata * $precoLata;
$qntLata = $litroArea / $lata;
$qntGalao = $litroArea / $galao;

Echo "Situação 1: Latas <br>" ."Quantidade de tinta a ser comprada: ".$qntLata ."<br>Preço: ".$valorLata."<br>";
Echo "Situação 2: Galão <br>" ."Quantidade de tinta a ser comprada: ".$qntGalao ."<br>Preço: ".$valorGalao;

?>