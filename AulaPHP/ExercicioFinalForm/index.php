<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuários</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Cadastro de Usuários</h1>
    <?php
        if(isset($_SESSION['nao_autenticado'])):
    ?>
            <p>ERRO: Usuário ou senha inválidos.</p>
    <?php
        endif;
        unset($_SESSION['nao_autenticado']);
    ?>
    <form action="login.php" method="POST">
        <div id="box1">
            <input id="inputs" type="text" name="usuario" placeholder="Usuário">
            <input id="inputs" type="password" name="senha" placeholder="Senha">
            <a href="cadastro.php">Cadastro</a><br>
            <button id="buttons" type="submit">Login</button>
        </div>
    </form>
</body>
</html>