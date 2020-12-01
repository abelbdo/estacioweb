<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuários</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Cadastro de Usuários</h1>

    <form action="cadastrar.php" method="post">
        <div id="box1">
            <input id="inputs" type="text" name="nome" placeholder="Nome do Usuário" required>
            <input id="inputs" type="text" name="usuario" placeholder="Usuário" required>
            <input id="inputs" type="password" name="senha" placeholder="Senha" required>
            <a href="login.php">Voltar</a><br>
            <button id="buttons" type="submit">Cadastrar</button>
        </div>
    </form>
</body>
</html>