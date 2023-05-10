<?php
include_once "seguranca.php";
include_once "conexao.php";

$nome = "";
$email = "";
$tel = "";
$end = "";
$id = "";
$acao = 1;

if (isset($_GET['usuario'])) {
    $conexao = new conexao();
    $bdusu = $conexao->executar("select * from usuarios where id=" . $_GET['usuario']);
    $usuario = $bdusu[0];
    $nome = $usuario['nome'];
    $email = $usuario['email'];
    $tel = $usuario['telefone'];
    $end = $usuario['endereco'];
    $id = $_GET['usuario'];
    $acao = 2;
}

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
    <form action="acoes.php?acao=<?= $acao ?>" method="POST">
        <label>Nome:</label>
        <input type="text" name="nome" value="<?= $nome ?>" />
        <br />
        <label>E-mail:</label>
        <input type="email" name="email" value="<?= $email ?>" />
        <br />
        <label>Telefone:</label>
        <input type="tel" name="telefone" value="<?= $tel ?>" />
        <br />
        <label> Endereco: </label>
        <input type="text" name="endereco" value="<?= $end ?>" />
        <br />
        <input type="hidden" name="id" value="<?= $id ?>" />
        <input type="submit" value="Enviar Dados">
    </form>
</body>

</html>