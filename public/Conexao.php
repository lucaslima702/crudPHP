<?php 

class Conexao{

    public static function openConnection(){
        try{
            $conn = new mysqli("localhost", "root", "Liminhasz7@", "db_name", 3306);
            echo "Connected";
            return $conn;
        }catch(Throwable $ex){
            throw $ex;
        }
    }
}
?>