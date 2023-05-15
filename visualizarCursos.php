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
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex justify-center items-center h-screen bg-gray-900">
    <div class="bg-gray-200 border border-indigo-800 rounded-sm border-8">
        <h1 class=" text-2xl font-medium mb-4 font-['Inter']">Visualização de cursos</h1>
        <a href="cadastroCurso.php">Cadastrar novo curso</a>
        <br>
        <a href="cadastroDisciplina.php">Cadastrar nova disciplina</a>
        <br>
        <br>
        <table class="border-collapse border border-slate-500">
            <?php
            $arrCursos = $conexao->executar("select * from cursos");
            foreach ($arrCursos as $cursos) {
            ?>
                <tr>
                    <th class="border border-slate-600">ID</th>
                    <th class="border border-slate-600">CURSO</th>
                    <th class="border border-slate-600">DESCRIÇÃO</th>
                    <th class="border border-slate-600">ALTERAR</th>
                    <th class="border border-slate-600">EXCLUIR</th>
                </tr>
                <tr>
                    <th class="border border-slate-600"><?= $cursos['id'] ?></th>
                    <th class="border border-slate-600"><?= $cursos['nome'] ?></th>
                    <th class="border border-slate-600"><?= $cursos['descricao'] ?></th>
                    <th class="border border-slate-600">
                        <a href=" alterarCurso.php?id=<?= $cursos['id'] ?>">Alterar</a>
                    </th>
                    <th class="border border-slate-600">
                        <a href="acoes.php?id=<?= $cursos['id'] ?>&acao=3">Excluir</a>
                    </th class="border border-slate-600">
                </tr>
                <tr>
                    <th class="border border-slate-600">ID</th>
                    <th class="border border-slate-600">DISCIPLINAS</th>
                </tr>
                <?php
                $arrDisciplinas = $conexao->executar("select * from disciplinas where id_curso=$cursos[id]");
                foreach ($arrDisciplinas as $disciplinas) {
                ?>
                    <tr>
                        <td class="border border-slate-700"><?= $disciplinas['id'] ?></td>
                        <td class="border border-slate-700"><?= $disciplinas['nome'] ?></td>
                    </tr>
                <?php
                }
                ?>
            <?php
            }
            ?>
    </div>
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
    } else if ($_GET['acao'] == 5) {
        echo "Disciplina cadastrada!";
    }
}
?>