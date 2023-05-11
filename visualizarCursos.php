<?php
include_once "seguranca.php";
include_once "conexao.php";

$conexao = new conexao();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar</title>
</head>

<body>
    <h2>Visualização de cursos</h2>
    <hr />
    <a href="cadastroCurso.php">Cadastrar novo curso</a>
    <br>
    <table>
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>DESCRIÇÃO</th>
            <th>ALTERAR</th>
            <th>EXCLUIR</th>
        </tr>
        <?php
        $arrCursos = $conexao->executar("select * from cursos");
        foreach ($arrCursos as $cursos) {
        ?>
            <tr>
                <td><?= $cursos['id'] ?></td>
                <td><?= $cursos['nome'] ?></td>
                <td><?= $cursos['descricao'] ?></td>
                <td>
                    <a href="">Alterar</a>
                </td>
                <td>
                    <a href="acoes.php?id=<?= $cursos['id'] ?>&acao=3">Excluir</a>
                </td>
            </tr>
        <?php
        }
        ?>
</body>

</html>

<?php
if (isset($_GET['acao'])) {
    if ($_GET['acao'] == 2) {
        echo "Salvo com sucesso!";
    } else if ($_GET['acao'] == 3) {
        echo "Excluido com sucesso!";
    } else if ($_GET['acao'] == 4) {
        echo "Alterado com sucesso!";
    }
}
?>