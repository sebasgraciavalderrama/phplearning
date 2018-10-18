<?php
/*
THIS SHOWS THE DIFERENCES BETWEEN PDO AND MSQLI
*/
class Dbh{
  private $db_server_name;
  private $db_username;
  private $db_password;
  private $db_name;
  private $charset;

  public function connect(){
    $this->db_server_name = "localhost";
    $this->db_username = "root";
    $this->db_password = "";
    $this->db_name = "testdb";
    $this->charset = "utf8mb4";

    try {
      $dsn = "mysql:host=".$this->db_server_name.";dbname=".$this->db_name.";charset=".$this->charset;
      $pdo = new PDO($dsn, $this->db_username, $this->db_password);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $pdo;
    } catch (PDOException $e) {
      echo "Connection failed: ".$e->getMessage()."<br>";
    }

  }
}
