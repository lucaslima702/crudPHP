<?php
require_once "Cliente.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST['nome'];
    $lastName = $_POST['sobrenome'];
    $age = $_POST['idade'];

    $cliente = new Cliente($firstName, $lastName, $age);
    $cliente->addClient($this->cliente);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar usuário</title>
</head>
<body>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
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