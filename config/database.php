<?php
class Database
{
    private $host = "localhost";
    private $dbname = "perpustakaan";
    private $username = "root";
    private $password = "";
    public $conn;

    public function connection()
    {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbname, $this->username, $this->password);
        } catch (PDOException $e) {
            echo "Connection error : " . $e->getMessage();
        }
        return $this->conn;
    }
}
