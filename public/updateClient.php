<?php
require "Cliente.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $oldClient = new Cliente($_POST['oldName'], $_POST['oldLastName'], $_POST['oldAge']);
    $id = Cliente::getId($oldClient);
    $newClient = new Cliente($_POST['newName'], $_POST['newLastName'], $_POST['newAge']);
    Cliente::updateClient($newClient, $id);
}


?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualização de Cliente</title>
</head>
<body>
    <div>
        <form method="POST">
            <h1>Cliente antigo: </h1>
            <input type="text" name="oldName" placeholder="Nome">
            <input type="text" name="oldLastName" placeholder="Sobrenome">
            <input type="number" name="oldAge" placeholder="Idade">


            <h1>Cliente novo: </h1>
            <input type="text" name="newName" placeholder="Nome">
            <input type="text" name="newLastName" placeholder="Sobrenome">
            <input type="number" name="newAge" placeholder="Idade">
            <button type="submit">Atualizar</button><br>
        </form>
    </div>


</body>
</html>