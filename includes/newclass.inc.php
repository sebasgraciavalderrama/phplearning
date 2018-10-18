<?php

class NewClass{
  //Properties and Methods goes here
  public $data = "I am a property";

  public function setNewProperty($newData){
    $this->data = $newData;
  }
  public function getProperty (){
    echo $this->data;
  }
}
?>
