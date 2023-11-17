<?php
require "Cliente.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if ($_POST['id'] == null){
        $cliente = Cliente::readAllClients();
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
    <title>Leitura de Cliente</title>
</head>
<body>
    <div>
        <form action="readClient.php" method="POST">
        <input type="number" name="id" placeholder="Identificação">
        <button type="submit">Ler</button><br>
    </div>
    
    <?php echo $cliente?>

</body>
</html>