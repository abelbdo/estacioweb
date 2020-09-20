<?php
$n1 = $_POST['numero1'];
$n2 = $_POST['numero2'];
$op = $_POST['operacao'];

if($op == 'soma'){
    $resultado = $n1 + $n2;
    echo "O resultado é: " .$resultado;    
} else if ($op == 'subtrai'){
    $resultado = $n1 - $n2;
    echo "O resultado é: " .$resultado; 
} else if ($op == 'multiplica'){
    $resultado = $n1 * $n2;
    echo "O resultado é: " .$resultado;
} else {
    $resultado = $n1 / $n2;
    echo "O resultado é: " .$resultado;
};
?>