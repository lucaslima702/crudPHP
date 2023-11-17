<?php
class Conexao{
    public static function openConnection(){
        $conn = new mysqli("db", "root", "testedoteste", "db_name", 3306);
        return $conn;
    }
}
?>