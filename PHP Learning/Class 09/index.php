<?php

abstract class Car {
    public $name;
    public function __construct($name) {
      $this->name = $name;
    }
    abstract public function intro() : string; 
  }
  
 // Child classes
  class Audi extends Car {
    public function intro() : string {
      return "Choose German quality! I'm an $this->name!"; 
    }
  }
  
  class Volvo extends Car {
    public function intro() : string {
      return "Proud to be Swedish! I'm a $this->name!"; 
    }
  }
  
  class Citroen extends Car {
    public function intro() : string {
      return "French extravagance! I'm a $this->name!"; 
    }
  }
  
  // Create objects from the child classes
  $audi = new audi("Audi");
  echo $audi->intro();
  echo "<br>";
  
  $volvo = new volvo("Volvo");
  echo $volvo->intro();
  echo "<br>";
  
  $citroen = new citroen("Citroen");
  echo $citroen->intro();
  echo "<br>";
  class BMW extends Car{
    public function intro() : string {
        return "This is $this->name";
    }
  }

  $BMW = new BMW ("BMW");
  echo $BMW->intro();
// $honda = new Car("honda");
// echo $honda->intro();

?>