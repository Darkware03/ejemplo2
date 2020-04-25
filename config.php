<?php
class Database{
  
    // specify your own database credentials
    private $host = "www.000webhost.com";
    private $db_name = "id10771108_appnovia";
    private $username = "admin";
    private $password = "ITQUTkux4*egiKeB";
    public $conn;
  
    // get the database connection
    public function getConnection(){
  
        $this->conn = null;
  
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
  
        return $this->conn;
    }
}
?>