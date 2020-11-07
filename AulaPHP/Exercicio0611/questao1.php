<?php
$nome = $_GET['nome'];
$salario = $_GET['salario'];
$aumento = $_GET['aumento'];
$novoSalario = $salario + (($aumento *$salario)/100);

echo "Funcionário: " .$nome ."<br>Novo salário: " .$novoSalario;

?>