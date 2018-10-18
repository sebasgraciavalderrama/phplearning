<?php

class Users{

  public $first = "Daniel";
  public $last = "Nielse";
  public $hairColor = "Brown";
  public $eyeColor = "Blue";

  public function __construct($first, $last, $hairColor, $eyeColor){
    $this->first=$first;
    $this->last=$last;
    $this->hairColor=$hairColor;
    $this->eyeColor=$eyeColor;

  }

  public function fullName(){
    return $this->first." ".$this->last;
  }

  public function __destruct(){
  }
}
 ?>
