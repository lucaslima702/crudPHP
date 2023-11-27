<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleCreate.css">
    <title>Criar usuário</title>
</head>
<body>

<div class="retorno">
<?php
require "Cliente.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cliente = new Cliente($_POST["nome"], $_POST["sobrenome"], $_POST["idade"], $_POST["login"], $_POST["senha"]);
    $retorno = Cliente::addClient($cliente);
    echo $retorno;
}
?>
    <form action="createClient.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" placeholder="Nome">
        <label for="sobrenome">Sobrenome:</label>
        <input type="text" id="sobrenome" name="sobrenome" placeholder="Sobrenome">
        <label for="idade">Idade:</label>
        <input type="number" id="idade" name="idade" placeholder="Idade">
        <label for="login">Login:</label>
        <input type="login" id="login" name="login" placeholder="Login">
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" placeholder="Senha">
        <button type="submit">Enviar</button>    
    </form>
    <button onclick="window.location.href='index.php'" id="backButton">Voltar</button>
</div>
</body>
</html>