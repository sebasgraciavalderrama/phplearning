<?php
/**
 * Class calculator
 */
class Calc{
  public $num1;
  public $num2;
  public $cal;

  function __construct($num1, $num2, $cal){
    $this->num1 = $num1;
    $this->num2 = $num2;
    $this->cal = $cal;
  }

  public function calcMethod(){
    switch ($this->cal) {
      case "add":
        $result = $this->num1 + $this->num2 ;
        break;
      case "subs":
        $result = $this->num1 - $this->num2 ;
        break;
      case "mult":
        $result = $this->num1 * $this->num2 ;
        break;
      case "divide":
        $result = $this->num1 / $this->num2 ;
        break;
      default:
        $result = "Error";
        break;
    }
    return $result;
  }

}
 ?>
