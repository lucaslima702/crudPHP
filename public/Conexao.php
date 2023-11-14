<?php 

class Conexao{

    public static function openConnection(){
        try{
            $conn = new mysqli("localhost", "root", "testedoteste", "db_name", 3306); //hostname, username, password, db_name, port
            return $conn;
        }catch(Throwable $ex){
            throw $ex;
        }
    }
}
?>