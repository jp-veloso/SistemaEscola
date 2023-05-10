<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h1>Sistema Escolar</h1>
    <form action="validacaoLogin.php" method="POST">
        <label>E-mail: </label>
        <input type="email" name="email" />
        <br />
        <label>Senha: </label>
        <input type="password" name="senha" />
        <br />
        <input type="submit" value="Entrar" />
        <a href="cadastroUsuario.php">Cadastrar</a>
    </form>
</body>

</html>

<?php
if ($_GET['acao'] == 1) {
    echo "Usuário cadastrado!";
}
?>