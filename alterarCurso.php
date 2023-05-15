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
    <title>Alterar curso</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex justify-center items-center h-screen bg-gray-900">
    <div class="max-w-xs p-12 bg-gray-200 border border-indigo-800 rounded-sm">
        <h1 class="text-2xl font-medium mb-4 font-['Inter']">Alterar curso</h1>
        <?php
        $id = $_GET['id'];
        ?>
        <form action="acoes.php?id=<?= $id ?>&acao=4" method="POST" class="flex flex-col">
            <label class="inline-block mb-1">Nome:</label>
            <input type="text" name="novoNome" class="border border-gray-300 rounded py-2 px-4 w-full focus:outline-none focus:border-indigo-400 mb-2" placeholder="Novo nome">
            <label class="inline-block mb-1">Descrição:</label>
            <input type="text" name="novaDescricao" class="border border-gray-300 rounded py-2 px-4 w-full focus:outline-none focus:border-indigo-400 mb-2" placeholder="Nova descrição">
            <input type="submit" value="Alterar" class="px-4 py-2 bg-indigo-600 hover:bg-indigo-700 transition duration-200 rounded-lg text-white mt-4">
        </form>
    </div>
</body>

</html>