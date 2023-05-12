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
    <title>Cadastro curso</title>
</head>

<body>
    <h1>Cadastro de cursos</h1>
    <hr>
    <form action="acoes.php?acao=2" method="POST">
        <label>Nome:</label>
        <input type="text" name="nome">
        <br>
        <label>Descrição:</label>
        <input type="text" name="descricao">
        <br>
        <select name="Cursos">
            <?php
            $arrCursos = $conexao->executar("select nome from cursos");
            foreach ($arrCursos as $cursos) {
            ?>
                <option value=""><?= $cursos['nome'] ?></option>
            <?php
            }
            ?>
        </select>
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>