<?php
/*
since this file is purely php code it is no mandatory
to write the closing tag ?>. The closing tag allows you to continue
writing any type of language/code/html in the same file.
*/
class ViewUser extends User{

  public function showAllUsers(){
    $datas = $this->getAllUsers();
    foreach ($datas as $data) {
      echo $data['uid']."<br>"; // Associative array, where uid is the key and the database value storaged under pwd is the value
      echo $data['pwd']."<br>";
    }
  }
}
