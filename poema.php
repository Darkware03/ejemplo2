<?php
class lo_cambie{
  
    // database connection and table name
    private $conn;
    private $table_name = "poemas";
  
    // object properties
    public $id;
    public $nombre;
    public $poemas;
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }
    // read products
function read(){

     $username = "id10771108_admin";
     $password = "1T^/oX7[36G|^qO@";
    // select all query
  $pdo = new PDO('mysql:host=localhost;dbname=id10771108_appnovia',$username,$password);
      $query = $pdo->prepare("select * from poemas");

    // prepare query statement
    $stmt =$query;
  
    // execute query
    $stmt->execute();
  
    return $stmt;
}
}
?>