<?php
/*
since this file is purely php code it is no mandatory
to write the closing tag ?>. The closing tag allows you to continue
writing any type of language/code/html in the same file.
*/
class User extends Dbh{
  protected function getAllUsers(){
    $sql ="SELECT * FROM USER";
    $result = $this->connect()->query($sql);
    $numRows = $result->num_rows;
    if($numRows > 0){
      while ($row = $result->fetch_assoc()) {
        $data[] = $row;
      }
      return $data;
    }
  }
}
