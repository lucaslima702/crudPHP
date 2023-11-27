<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleUpdate.css">
    <title>Atualização de Cliente</title>
</head>
<body>
    <div class="retorno">
    <?php
    require "Cliente.php";

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(Cliente::verifyClient($_POST['login'], $_POST['senha'])){
            $oldClient = new Cliente($_POST['oldName'], $_POST['oldLastName'], $_POST['oldAge'], $_POST['login'], $_POST['senha']);
            $id = Cliente::getId($oldClient);
            $newClient = new Cliente($_POST['newName'], $_POST['newLastName'], $_POST['newAge'], $_POST['login'], $_POST['senha']);
            $retorno = Cliente::updateClient($newClient, $id);
            echo $retorno;
            }else{
                echo "Login ou senha errados, tente novamente";
            }
        }
    ?>
        <form method="POST">
            <h1>Cliente antigo: </h1>
            <input type="text" name="oldName" placeholder="Nome">
            <input type="text" name="oldLastName" placeholder="Sobrenome">
            <input type="number" name="oldAge" placeholder="Idade">


            <h1>Cliente novo: </h1>
            <input type="text" name="newName" placeholder="Nome">
            <input type="text" name="newLastName" placeholder="Sobrenome">
            <input type="number" name="newAge" placeholder="Idade">
            <input type="text" name="login" placeholder="login">
            <input type="text" name="senha" placeholder="senha">
            <button type="submit">Atualizar</button><br>
        </form>
        <button onclick="window.location.href='index.php'" id="backButton">Voltar</button>
    </div>
</body>
</html>