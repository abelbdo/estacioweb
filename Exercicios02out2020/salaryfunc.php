<?php
$nome = $_GET["Funcionario"];
$salario = $_GET["Salario"];
$aumento = $_GET["Aumento"];

$aumentoPercentual = $aumento / 100;
$valordoaumento = $salario * $aumentoPercentual;
$salarioNovo = $salario + $valordoaumento;

echo "O funcionário " .$nome. " recebeu um aumento de " .$valordoaumento. " e seu novo salário é de " .$salarioNovo;
?><br>
<a href="Ex01Controle.html">Retornar</a>