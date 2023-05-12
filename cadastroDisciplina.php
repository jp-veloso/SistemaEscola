<?php
include_once "conexao.php";
$conexao = new conexao();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro disciplinas</title>
</head>

<body>
    <h1>Cadastro de disciplinas</h1>
    <hr>
    <form action="acoes.php?acao=5" method="POST">
        <label>Nome:</label>
        <input type="text" name="nome">
        <br>
        <select>
            <?php
            $arrCursos = $conexao->executar("select * from cursos");
            foreach ($arrCursos as $cursos) {
            ?>
                <option><?= $cursos['nome'] ?></option>
            <?php
            }
            ?>
        </select>
        <br>
        <select name="id">
            <?php
            $arrCursos = $conexao->executar("select * from cursos");
            foreach ($arrCursos as $cursos) {
            ?>
                <option><?= $cursos['id'] ?></option>
            <?php
            }
            ?>
        </select>
        <br>
        <input type="submit" value="Cadastrar">
    </form>
</body>

</html>