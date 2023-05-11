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
    header("location: visualizarCursos.php?acao=2");
    die();
}

// Remover dados do curso
else if ($acao == 3) {
    $id = $_GET['id'];

    $sql = "delete from cursos where id = $id";
    $conexao = new conexao();
    $conexao->executar($sql);
    header("location: visualizarCursos.php?acao=3");
    die();
}

//Alterar dados do curso
else if ($acao == 4) {
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $id = $_POST['id'];

    $sql = "update cursos set id='$id', nome='$nome' , descricao=$descricao where id=$id";
    $conexao = new conexao();
    $conexao->executar($sql);
    header("location: visualizarCursos.php?acao=4");
    die();
}
