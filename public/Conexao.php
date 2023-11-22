<?php
class Conexao{
    public static function getConnection(){
        $conn = new mysqli("db", "root", "testedoteste", "db_name", "3306");
        return $conn;
    }
}
?>