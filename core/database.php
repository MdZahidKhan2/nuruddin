<?php

class Database{
public $conn;

public function__construct()
{
    $serverName = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ctg_283";
    
    try {
      $this->conn = new PDO("mysql:host=$serverName;dbname=$dbname", $username, $password);

      echo "Connected successfully";
    } catch(PDOException $e) 
    {
      echo "Connection failed: " . $e->getMessage();
    }

}
    public function dataWrite($sql)
    {
        $statement = $this->conn->prepare($sql);
        $statement->execute();
    }
}


?>