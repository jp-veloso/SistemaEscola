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

<body class="bg-gray-100 text-gray-800 font-sans leading-normal p-10">
    <div class="container mx-auto">
        <h1 class="text-3xl font-bold mb-4">Visualização de cursos</h1>
        <a class="text-blue-500 hover:text-blue-700" href="cadastroCurso.php">Cadastrar novo curso</a>
        <br>
        <a class="text-blue-500 hover:text-blue-700" href="cadastroDisciplina.php">Cadastrar nova disciplina</a>
        <br>
        <br>
        <?php
        if (isset($_GET['acao'])) {
            if ($_GET['acao'] == 2) {
                echo '<span class="bg-green-200 text-green-900 p-3 rounded-lg">Salvo com sucesso!</span>';
            } else if ($_GET['acao'] == 3) {
                echo '<span class="bg-green-200 text-green-900 p-3 rounded-lg">Excluído com sucesso!</span>';
            } else if ($_GET['acao'] == 4) {
                echo '<span class="bg-green-200 text-green-900 p-3 rounded-lg">Alterado com sucesso!</span>';
            } else if ($_GET['acao'] == 5) {
                echo '<span class="bg-green-200 text-green-900 p-3 rounded-lg">Disciplina cadastrado com sucesso!</span>';
            }
        }
        ?>
        <br><br>
        <table class="min-w-full border border-gray-300">
            <?php
            $arrCursos = $conexao->executar("select * from cursos");
            foreach ($arrCursos as $cursos) {
            ?>
                <tr>
                    <th class="py-2 px-4 border-b border-gray-300 bg-gray-100">ID</th>
                    <th class="py-2 px-4 border-b border-gray-300 bg-gray-100">CURSO</th>
                    <th class="py-2 px-4 border-b border-gray-300 bg-gray-100">DESCRIÇÃO</th>
                    <th class="py-2 px-4 border-b border-gray-300 bg-gray-100">ALTERAR</th>
                    <th class="py-2 px-4 border-b border-gray-300 bg-gray-100">EXCLUIR</th>
                </tr>
                <tr>
                    <th class="py-2 px-4 border-b border-gray-300 bg-gray-100 font-normal"><?= $cursos['id'] ?></th>
                    <th class="py-2 px-4 border-b border-gray-300 bg-gray-100 font-normal"><?= $cursos['nome'] ?></th>
                    <th class="py-2 px-4 border-b border-gray-300 bg-gray-100 font-normal"><?= $cursos['descricao'] ?></th>
                    <th class="py-2 px-4 border-b border-gray-300 bg-gray-100">
                        <a class="text-blue-500 hover:text-blue-700" href=" alterarCurso.php?id=<?= $cursos['id'] ?>">Alterar</a>
                    </th>
                    <th class="py-2 px-4 border-b border-gray-300 bg-gray-100">
                        <a class="text-blue-500 hover:text-blue-700" href="acoes.php?id=<?= $cursos['id'] ?>&acao=3">Excluir</a>
                    </th class="py-2 px-4 border-b border-gray-300 bg-gray-100">
                </tr>
                <tr>
                    <th class="py-2 px-4 border-b border-gray-300 bg-gray-100">ID</th>
                    <th class="py-2 px-4 border-b border-gray-300 bg-gray-100">DISCIPLINAS</th>
                </tr>
                <?php
                $arrDisciplinas = $conexao->executar("select * from disciplinas where id_curso=$cursos[id]");
                foreach ($arrDisciplinas as $disciplinas) {
                ?>
                    <tr>
                        <th class="py-2 px-4 border-b border-gray-300 bg-gray-100 font-normal"><?= $disciplinas['id'] ?></th>
                        <th class="py-2 px-4 border-b border-gray-300 bg-gray-100 font-normal"><?= $disciplinas['nome'] ?></th>
                    </tr>
                <?php
                }
                ?>
            <?php
            }
            ?>
        </table>
    </div>
</body>

</html>