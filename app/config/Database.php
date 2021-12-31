<?php

namespace app\config;

use PDOException;
use PDO;

class Database
{
    private String $host = "localhost";
    private String $db_name = "artsmonde";
    private String $username = "root";
    private String $password = "";
    private \PDO $conn;


    public function getConnection(): \PDO{

        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        }
        catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }
}