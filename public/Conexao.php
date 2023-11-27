<?php
class Conexao{
    public static function getConnection(){
        $conn = new mysqli("host.docker.internal", "root", "Liminhasz7@", "db_name", "3306");
        return $conn;
    }
}
?>