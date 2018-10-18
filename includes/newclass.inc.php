<?php

class NewClass{
  //Properties and Methods goes here
  public $data = "I am a property";

  public function __construct(){
    echo "This class has been instantiated";
  }

  public function setNewProperty($newData){
    $this->data = $newData;
  }
  public function getProperty (){
    echo $this->data;
  }

  public function __destruct(){
    echo "This is the end of the class!";
    /*
      An example could be if we wanted to open a database
      connection in the constructor and close the connection
      in the destructor
    */
  }



}
?>
