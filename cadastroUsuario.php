<?php
include_once "conexao.php";

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex justify-center items-center h-screen bg-gray-900">
    <div class="max-w-xs p-12 bg-gray-200 border border-indigo-800 rounded-sm">
        <h2 class="text-2xl font-medium mb-4 font-['Inter']">Tela de Cadastro</h2>
        <form action="acoes.php?acao=1" method="POST" class="flex flex-col">
            <label class="inline-block mb-1">Nome:</label>
            <input type="text" name="nome" class="border border-gray-300 rounded py-2 px-4 w-full focus:outline-none focus:border-indigo-400 mb-2" placeholder="Seu nome"/>
            <label class="inline-block mb-1">E-mail:</label>
            <input type="email" name="email" class="border border-gray-300 rounded py-2 px-4 w-full focus:outline-none focus:border-indigo-400 mb-2" placeholder="Seu email"/>
            <label class="inline-block">Senha:</label>
            <input type="password" name="senha" class="border border-gray-300 rounded py-2 px-4 w-full focus:outline-none focus:border-indigo-400 mb-2" placeholder="Sua senha"/>
            <div class="flex flex-col">
                <input type="submit" value="Enviar Dados" class="px-4 py-2 bg-indigo-600 hover:bg-indigo-700 transition duration-200 rounded-lg text-white mt-4">
                <a href="./index.php" class="text-center mt-2 text-neutral-600">Voltar para login</a>
            </div>
        </form>
    </div>
</body>

</html>