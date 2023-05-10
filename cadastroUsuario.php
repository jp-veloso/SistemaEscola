<?php
include_once "conexao.php";

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>

<body>
    <h2>Tela de Cadastro</h2>
    <hr>
    <form action="acoes.php?acao=1" method="POST">
        <label>Nome:</label>
        <input type="text" name="nome" />
        <br />
        <label>E-mail:</label>
        <input type="email" name="email" />
        <br />
        <label>Senha:</label>
        <input type="password" name="senha" />
        <br />
        <input type="submit" value="Enviar Dados">
    </form>
</body>

</html>