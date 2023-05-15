<?php
include_once "seguranca.php";
include_once "conexao.php";
$acao = $_GET["acao"];

// Inserir dados de usuarios
if ($acao == 1) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "insert into usuarios (nome,email,senha) values ('$nome','$email','$senha')";
    $conexao = new conexao();
    $conexao->executar($sql);
    header("location: index.php?acao=1");
    die();
}

// Inserir dados do curso
else if ($acao == 2) {
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];

    $sql = "insert into cursos (nome,descricao) values ('$nome','$descricao')";
    $conexao = new conexao();
    $conexao->executar($sql);
    header("location: cadastroDisciplina.php?acao=2");
    die();
}

// Remover dados do curso
else if ($acao == 3) {
    $id = $_GET['id'];

    $sql = "delete from cursos where id = $id";
    $sql1 = "delete from disciplinas where id_curso = $id";
    $conexao = new conexao();
    $conexao->executar($sql1);
    $conexao->executar($sql);
    header("location: visualizarCursos.php?acao=3");
    die();
}

// Alterar dados do curso
else if ($_GET['acao'] == 4) {
    $idCurso = $_GET['id'];

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $novoNome = $_POST['novoNome'];
        $novaDescricao = $_POST['novaDescricao'];

        $conexao->executar("UPDATE cursos SET nome = '$novoNome', descricao = '$novaDescricao' WHERE id = $idCurso");
        
        header("Location: visualizarCursos.php");
        exit();
        
    } else {
        $curso = $conexao->executar("SELECT * FROM cursos WHERE id = $idCurso");

        ?>
        <form method="POST" action="acoes.php?acao=4&id=<?= $idCurso ?>">
            <label for="novoNome">Novo Nome:</label>
            <input type="text" name="novoNome" value="<?= isset($curso['nome']) ? $curso['nome'] : '' ?>"><br>
            <label for="novaDescricao">Nova Descrição:</label>
            <input type="text" name="novaDescricao" value="<?= isset($curso['descricao']) ? $curso['descricao'] : '' ?>"><br>
            <input type="submit" value="Alterar">
            <br>
            <input id="botao" type="submit" name="Voltar" value="Informações" formaction="visualizarCursos.php">
        </form>
        <?php
    }
}

// Inserir dados da disciplina
else if ($acao == 5) {
    $nome = $_POST['nome'];
    $id = $_POST['id'];

    $sql = "insert into disciplinas (id,nome,id_curso) values (null,'$nome','$id')";
    $conexao = new conexao();
    $conexao->executar($sql);
    header("location: visualizarCursos.php?acao=5");
    die();
}
