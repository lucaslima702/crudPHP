<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylePerfil.css">
    <title>Meu Perfil</title>
</head>
<body>
    <div class="perfil">
    <?php
        require "Cliente.php";
        $login = $_SESSION['loginSession'];
        echo "Usuário '" . $login . "' autenticado !";
    ?>
        <button onclick="window.location.href='index.php'">Início</button>
    </div> 
</body>
</html>