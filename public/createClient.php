<?php
require "Cliente.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cliente = new Cliente($_POST["nome"], $_POST["sobrenome"], $_POST["idade"]);
    Cliente::addClient($cliente);
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar usuário</title>
</head>
<body>

    <form action="createClient.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" placeholder="Nome" required>
        <label for="sobrenome">Sobrenome:</label>
        <input type="text" id="sobrenome" name="sobrenome" placeholder="Sobrenome" required>
        <label for="idade">Idade:</label>
        <input type="number" id="idade" name="idade" placeholder="Idade" required>
        <button type="submit">Enviar</button>
    </form>

</body>
</html>