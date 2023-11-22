<?php
require "Conexao.php";

class Cliente{
    private String $firstName;
    private String $lastName;
    private int $idade;
    
    public function __construct($firstName, $lastName, $idade){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->idade = $idade;
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
        foreach($result as $row){
            $firstName = $row['firstName'];
            $lastName = $row['lastName'];
            $idade = $row['idade'];
            $id = $row['id'];
            echo "Nome: " . $firstName . " " . $lastName . "<br/>Idade: " . $idade . "<br/>ID: " . $id . "<br/>";
        }
    }

    public static function addClient(Cliente $cliente){
        $conn = Conexao::getConnection();
        $result = $conn->query("insert into pessoas (firstName, lastName, idade) values 
                                                    ('$cliente->firstName',
                                                    '$cliente->lastName', 
                                                    '$cliente->idade')");
    }

    public static function removeClient($id){
        $conn = Conexao::getConnection();
        $result1 = $conn->query("select * from pessoas where id = " . $id);
        $clientName = null;
        foreach($result1 as $row){
            $clientName = $row['firstName'];
        }
        $result = $conn->query("delete from pessoas where id = ". $id);
        echo "Cliente ". $clientName. " removido com o ID: ". $id. PHP_EOL;
    }

    public static function updateClient(Cliente $cliente, int $id){
        $conn = Conexao::getConnection();
        $result1 = $conn->query("select * from pessoas where id = ". $id);
        foreach($result1 as $row){
            $oldName = $row['firstName'];
        }
        $result = $conn->query("update pessoas set firstName = '$cliente->firstName', lastName = '$cliente->lastName', idade = '$cliente->idade' where id = ". $id);
        if($oldName == $cliente->firstName){
            echo "Cliente ". $cliente->firstName. " atualizado com o ID: ". $id. PHP_EOL;
        }else {
            echo "Cliente ". $oldName. " atualizado para o cliente ". $cliente->firstName. " com o ID: ". $id. PHP_EOL;
        }
    }
}