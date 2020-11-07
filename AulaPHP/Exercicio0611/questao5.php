<?php
$nome = $_GET['nome'];
$tipo = $_GET['tipo'];

if ($tipo == "aluno") {
    Echo "Livro: ".$nome ."<br>";
    Echo "Prazo de entrega: 3 dias";
} elseif($tipo == "professor") {
    Echo "Livro: ".$nome ."<br>";
    Echo "Prazo de entrega: 10 dias";
}
?>