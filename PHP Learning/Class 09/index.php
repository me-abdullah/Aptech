<?php

// Abstract class
abstract class Shape {
  protected $name;
  
  public function __construct($name) {
      $this->name = $name;
  }
  
  // Abstract method (to be implemented by subclasses)
  abstract public function calculateArea();
  
  public function getName() {
      return $this->name;
  }
}

// Concrete subclass 1
class Circle extends Shape {
  private $radius;
  
  public function __construct($name, $radius) {
      parent::__construct($name);
      $this->radius = $radius;
  }
  
  // Implementation of abstract method
  public function calculateArea() {
      return pi() * $this->radius * $this->radius;
  }
}

// Concrete subclass 2
class Rectangle extends Shape {
  private $width;
  private $height;
  
  public function __construct($name, $width, $height) {
      parent::__construct($name);
      $this->width = $width;
      $this->height = $height;
  }
  
  // Implementation of abstract method
  public function calculateArea() {
      return $this->width * $this->height;
  }
}

// Usage
$circle = new Circle("Circle", 5);
$rectangle = new Rectangle("Rectangle", 4, 6);

// Using abstraction
$shapes = array($circle, $rectangle);

foreach ($shapes as $shape) {
  echo "Area of " . $shape->getName() . ": " . $shape->calculateArea() . "<br>";
}

//encapsulation 

// Class definition
class Car {
  // Private properties (encapsulated)
  private $brand;
  private $model;
  private $year;

  // Constructor to initialize properties
  public function __construct($brand, $model, $year) {
      $this->brand = $brand;
      $this->model = $model;
      $this->year = $year;
  }

  // Public methods (expose controlled access to properties)
  public function getBrand() {
      return $this->brand;
  }

  public function getModel() {
      return $this->model;
  }

  public function getYear() {
      return $this->year;
  }

  public function setBrand($brand) {
      $this->brand = $brand;
  }

  public function setModel($model) {
      $this->model = $model;
  }

  public function setYear($year) {
      $this->year = $year;
  }
}

// Usage
$myCar = new Car("Toyota", "Camry", 2020);

// Accessing properties indirectly through methods (encapsulation)
echo "Brand: " . $myCar->getBrand() . "<br>";   // Outputs: Toyota
echo "Model: " . $myCar->getModel() . "<br>";   // Outputs: Camry
echo "Year: " . $myCar->getYear() . "<br>";     // Outputs: 2020

// Modifying properties indirectly through methods (encapsulation)
$myCar->setYear(2021);
echo "Updated Year: " . $myCar->getYear() . "<br>";   // Outputs: 2021

?>