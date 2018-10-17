<?php
/*
since this file is purely php code it is no mandatory
to write the closing tag ?>. The closing tag allows you to continue
writing any type of language/code/html in the same file.
*/
class dbh{
  private $db_server_name;
  private $db_username;
  private $db_password;
  private $db_name;

  protected function connect(){
    $this->db_server_name = "localhost";
    $this->db_username = "root";
    $this->db_password = "";
    $this->db_name = "ooptutorial";

    $conn = new mysqli();

  }
}

$conn = mysqli_connect($db_server_name, $db_username, $db_password, $db_name);//string de conexion.
