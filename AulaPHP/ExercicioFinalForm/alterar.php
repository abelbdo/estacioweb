<?php
session_start();
include("conexao.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$usuario = mysqli_real_escape_string($conexao, trim($_POST['usuario']));

$sqlupdate = "Update usuario SET nome='$nome' where usuario='$usuario' ";
$update = mysqli_query($conexao, $sqlupdate);
$query = "select nome from usuario where usuario = '$usuario'";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
	$usuario_bd = mysqli_fetch_assoc($result);
	$_SESSION['nome'] = $usuario_bd['nome'];
	header('Location: painel.php');
    exit();
} else {
    header('Location: index.php');
}
?>