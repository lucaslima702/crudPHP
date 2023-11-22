<?php
require "Cliente.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if ($_POST['id'] == null){
        $listaDeClientes = Cliente::readAllClients();
    }else{
        $cliente = Cliente::readClient($_POST['id']);
    }
}   
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleRead.css">
    <title>Leitura de Cliente</title>
</head>
<body>
    <div class="retorno">
        <?php if($listaDeClientes == null){
            echo $cliente;
        }else{
            foreach($listaDeClientes as $cliente){
                echo $cliente;
            }
        }?>
        <form action="readClient.php" method="POST">
            <input type="number" name="id" placeholder="Identificação">
            <button type="submit">Ler</button><br>
        </form>
        <button onclick="window.location.href='index.php'" id="backButton">Voltar</button>
    </div>
</body>
</html>