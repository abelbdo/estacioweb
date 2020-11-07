<?php
$nome = $_GET['nome'];
$contador = 1;

for ($contador=1; $contador <= 5; $contador++) { 
    print "$nome <br>";
    $nome = "$nome $nome";
}
    

?>