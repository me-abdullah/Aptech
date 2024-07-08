<!DOCTYPE html>
<html>
<body>

<?php
//Inheritance
// Parent class
class Animal {
  protected $name;
  
  public function __construct($name) {
      $this->name = $name;
  }
  
  public function eat() {
      return $this->name . " is eating.";
  }
}

// Child class inheriting Animal
class Dog extends Animal {
  public function bark() {
      return $this->name . " is barking.";
  }
}

// Usage
$dog = new Dog("Buddy");
echo $dog->eat(); // Outputs: Buddy is eating.
echo $dog->bark(); // Outputs: Buddy is barking.


// Parent class
class Shape {
  protected $name;
  
  public function __construct($name) {
      $this->name = $name;
  }
  
  public function area() {
      // Placeholder method for calculating area
      return 0;
  }
}

// Child class 1
class Circle extends Shape {
  private $radius;
  
  public function __construct($name, $radius) {
      parent::__construct($name);
      $this->radius = $radius;
  }
  
  public function area() {
      return pi() * $this->radius * $this->radius;
  }
}

// Child class 2
class Rectangle extends Shape {
  private $width;
  private $height;
  
  public function __construct($name, $width, $height) {
      parent::__construct($name);
      $this->width = $width;
      $this->height = $height;
  }
  
  public function area() {
      return $this->width * $this->height;
  }
}

// Usage
$circle = new Circle("Circle", 5);
$rectangle = new Rectangle("Rectangle", 4, 6);

// Polymorphic behavior
$shapes = array($circle, $rectangle);

foreach ($shapes as $shape) {
  echo "Area of " . $shape->name . ": " . $shape->area() . "<br>";
}

?>
 
</body>
</html>
