<?php
$salario = $_GET["Salario"];
$prestacao = $_GET["Emprestimo"];
$parcelaMax = $salario * 30/100;
$uau = 10

if($prestacao > $parcelaMax) {
    echo "Valor da prestação superior ao estabelecido";
} else if($prestacao <= $parcelaMax) {
    echo "Empréstimo disponível";
};
echo $uau ++
?><br>
<a href="Ex02Controle.html">Retornar</a>