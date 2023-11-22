<?php
require "Cliente.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $cliente = new Cliente($_POST['name'], $_POST['sobrenome'], $_POST['idade']);
    $id = Cliente::getId($cliente);
    Cliente::removeClient($id);
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleDelete.css">
    <title>Desligamento de Cliente</title>
</head>
<body>
    <div>
        <form method="POST">
            <h1>Cliente para apagar: </h1>
            <input type="text" name="name" placeholder="Nome">
            <input type="text" name="sobrenome" placeholder="Sobrenome">            
            <input type="number" name="idade" placeholder="Idade">
            <button type="submit">Deletar</button><br>
        </form>
        <button onclick="window.location.href='index.php'" id="backButton">Voltar</button>
    </div>
</body>
</html>