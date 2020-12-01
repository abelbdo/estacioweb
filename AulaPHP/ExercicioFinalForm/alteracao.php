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
    <h1>Alteração de dados</h1>

    <form action="alterar.php" method="post">
        <div id="box1">
            <input id="inputs" type="text" name="nome" placeholder="Novo nome" required>
            <input id="inputs" type="text" name="usuario" placeholder="Usuário" required>
            <button id="buttons" type="submit">Alterar</button>
        </div>
    </form>
</body>
</html>