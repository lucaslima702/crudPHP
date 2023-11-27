<?php
require "Conexao.php";

class Cliente{
    private String $firstName;
    private String $lastName;
    private int $idade;
    private String $login;
    private String $password;
    
    public function __construct($firstName, $lastName, $idade, $login, $password){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->idade = $idade;
        $this->login = $login;
        $this->password = $password;
    }

    public static function getId(Cliente $cliente){
        $conn = Conexao::getConnection();
        $result = $conn->query("select * from pessoas where firstName = '$cliente->firstName' and lastName = '$cliente->lastName' and idade = $cliente->idade");
        foreach($result as $row){
            $id = $row['id'];
            return $id;
        }
    }

    public static function readClient(int $id){
        $conn = Conexao::getConnection();
        $result = $conn->query("select * from pessoas where id = " . $id);
        foreach($result as $row){
            $firstName = $row['firstName'];
            $lastName = $row['lastName'];
            $idade = $row['idade'];
            $id = $row['id'];
            return "Nome: " . $firstName . " " . $lastName . "<br/>Idade: " . $idade . "<br/>ID: " . $id . PHP_EOL;
        }
    }

    public static function readAllClients(){
        $conn = Conexao::getConnection();
        $result = $conn->query("select * from pessoas");
        $array = array();
        foreach($result as $row){
            $firstName = $row['firstName'];
            $lastName = $row['lastName'];
            $idade = $row['idade'];
            $id = $row['id'];
            $string = "Nome: " . $firstName . " " . $lastName . "<br/>Idade: " . $idade . "<br/>ID: " . $id . "<br/>";
            array_push($array, $string);
        }
        return $array;
    }

    public static function addClient(Cliente $cliente){
        $conn = Conexao::getConnection();
        $password = password_hash($cliente->password, PASSWORD_DEFAULT);
        $result = $conn->query("insert into pessoas (firstName, lastName, idade, login, password) values 
                                                    ('$cliente->firstName',
                                                    '$cliente->lastName', 
                                                    '$cliente->idade', '$cliente->login',
                                                    '$password')");
        return "Cliente " . $cliente->firstName ." adicionado com o ID: " . Cliente::getId($cliente) . "<br/>Usuário: " . $cliente->login . " <br/>Senha: " . $cliente->password ."<br/>Com o ID: ". Cliente::getId($cliente);
    }

    public static function removeClient($id){
        $conn = Conexao::getConnection();
        $result1 = $conn->query("select * from pessoas where id = " . $id);
        $clientName = null;
        foreach($result1 as $row){
            $clientName = $row['firstName'];
        }
        $result = $conn->query("delete from pessoas where id = ". $id);
        return "Cliente ". $clientName. " removido com o ID: ". $id. PHP_EOL;
    }

    public static function updateClient(Cliente $cliente, int $id){
        $conn = Conexao::getConnection();
        $result1 = $conn->query("select * from pessoas where id = ". $id);
        foreach($result1 as $row){
            $oldName = $row['firstName'];
        }
        $result = $conn->query("update pessoas set firstName = '$cliente->firstName', lastName = '$cliente->lastName', idade = '$cliente->idade' where id = ". $id);
        if($oldName == $cliente->firstName){
            return "Cliente ". $cliente->firstName. " atualizado com o ID: ". $id. PHP_EOL;
        }else {
            return "Cliente ". $oldName. " atualizado para o cliente ". $cliente->firstName. " com o ID: ". $id. PHP_EOL;
        }
    }

    public static function verifyClient($loginCliente, $senha) : bool{
        $conn = Conexao::getConnection();
        $result = $conn->query("select password from pessoas where login = '$loginCliente'");
        foreach($result as $row){
            $password = $row['password'];
        }
        if(password_verify($senha, $password)){
            return true;
        }else {
            return false;
    }
}

    public static function getClientByLogin($loginCliente) : Cliente{
        $conn = Conexao::getConnection();
        $result = $conn->query("select * from pessoas where login = '$loginCliente'");
        foreach($result as $row){
            $id = $row['id'];
        }
        $cliente = Cliente::getClientById($id);
        return $cliente;
    }

    public static function getClientById($id) : Cliente{
        $conn  = Conexao::getConnection();
        $result = $conn->query("select * from pessoas where id = '$id'");
        foreach($result as $row){
            $firstName = $row['firstName'];
            $lastName = $row['lastName'];
            $idade = $row['idade'];
            $id = $row['id'];
            $login = $row['login'];
            $password = "essaNaoEhASenha";
        }
        $cliente = new Cliente($firstName, $lastName, $idade, $login, $password);
        return $cliente;
    }
}