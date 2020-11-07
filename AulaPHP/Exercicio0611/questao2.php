<?php
$salario = $_GET['salario'];
$prestacao = $_GET['prestacao'];
$prestMax = $salario*(30/100);

if ($prestacao <= $prestMax) {
    echo "O emprestimo pode ser realizado.";
} else {
    echo 'O empréstimo excedeu o limite definido.';
}

?>