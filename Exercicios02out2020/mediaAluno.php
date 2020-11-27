<?php
$nome = $_GET["nome"];
$nota1 = $_GET["nota1"];
$nota2 = $_GET["nota2"];
$sum = $nota1 + $nota2;
$media = $sum/2;

if($media < 3){
    echo "O aluno ".$nome. " está Reprovado";
} else if($media >= 3 && $media <= 7) {
    echo "O aluno " .$nome. " vai realizar Exame";
} else if($media > 7) {
    echo "O aluno ".$nome. " está Aprovado";
};

?><br>
<a href="Ex03Controle.html">Retorno</a>
