<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleLogin.css">
    <title>Login - CRUD</title>
</head>
<body>
<div class="login-container">
    <form method="post" class="login-form">
    <?php
    require "Cliente.php";
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(Cliente::verifyClient($_POST['login'], $_POST['senha'])){
            $_SESSION['loginSession'] = $_POST['login'];
            header('Location: /retorno.php');
        }else{
            echo "Tente novamente";
        }
    }
    ?>
        <input type="text" name="login" placeholder="Nome de usuário">
        <input type="password" name="senha" placeholder="Senha">
        <button type="submit" value="Entrar" name="submit">Entrar</button>
    </form>
</div>
</body>
</html>