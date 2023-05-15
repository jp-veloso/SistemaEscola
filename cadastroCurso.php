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
    <title>Cadastrar curso</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex justify-center items-center h-screen bg-gray-900">
    <div class="max-w-xs p-12 bg-gray-200 border border-indigo-800 rounded-sm">
        <h1 class="text-2xl font-medium mb-4 font-['Inter']">Cadastrar curso</h1>
        <form action="acoes.php?acao=2" method="POST" class="flex flex-col">
            <label class="inline-block mb-1">Nome:</label>
            <input type="text" name="nome" class="border border-gray-300 rounded py-2 px-4 w-full focus:outline-none focus:border-indigo-400 mb-2" placeholder="Nome do curso">
            <label class="inline-block mb-1">Descrição:</label>
            <input type="text" name="descricao" class="border border-gray-300 rounded py-2 px-4 w-full focus:outline-none focus:border-indigo-400 mb-2" placeholder="Tecnologia, saúde...">
            <input type="submit" value="Enviar" class="px-4 py-2 bg-indigo-600 hover:bg-indigo-700 transition duration-200 rounded-lg text-white mt-4">
        </form>
    </div>
</body>

</html>