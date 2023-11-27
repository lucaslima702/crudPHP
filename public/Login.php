<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - CRUD</title>
</head>
<body>
    <form method="post">
    <?php
    require "Cliente.php";
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(Cliente::verifyClient($_POST['login'], $_POST['senha'])){
            header('Location: /retorno.php');
        }else{
            header('Location: /Login.php');
        }
    }
    ?>
        <input type="text" name="login" placeholder="Nome de usuário">
        <input type="password" name="senha" placeholder="Senha">
        <input type="submit" value="Entrar" name="submit">
    </form>
</body>
</html>