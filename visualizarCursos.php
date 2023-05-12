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
    <br>
    <a href="cadastroCurso.php">Cadastrar novo curso</a>
    <br>
    <br>
    <table>
        <?php
        $arrCursos = $conexao->executar("select * from cursos");
        foreach ($arrCursos as $cursos) {
        ?>
            <tr>
                <th>ID</th>
                <th>CURSO</th>
                <th>DESCRIÇÃO</th>
                <th>ALTERAR</th>
                <th>EXCLUIR</th>
            </tr>
            <tr>
                <th><?= $cursos['id'] ?></th>
                <th><?= $cursos['nome'] ?></th>
                <th><?= $cursos['descricao'] ?></th>
                <th>
                    <a href="">Alterar</a>
                </th>
                <th>
                    <a href="acoes.php?id=<?= $cursos['id'] ?>&acao=3">Excluir</a>
                </th>
            </tr>
            <tr>
                <th>ID</th>
                <th>DISCIPLINAS</th>
            </tr>
            <?php
            $arrDisciplinas = $conexao->executar("select * from disciplinas where id_curso=$cursos[id]");
            foreach ($arrDisciplinas as $disciplinas) {
            ?>
                <tr>
                    <td><?= $disciplinas['id'] ?></td>
                    <td><?= $disciplinas['nome'] ?></td>
                </tr>
            <?php
            }
            ?>
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