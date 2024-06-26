<!DOCTYPE html>
<html>
<body>

<?php
class Fruit {
  public $name;
  public $color;
  public $category;
  public function __construct($name, $color,$category) {
    $this->name = $name;
    $this->color = $color; 
    $this->category = $category; 
  }
  public function intro() {
    echo "The fruit is {$this->name} and the color is {$this->color} category is {$this->category}."; 
  }
}
// Strawberry is inherited from Fruit
// class Strawberry extends Fruit {
//   public function message() {
//     echo "Am I a fruit or a berry? "; 
//   }
// }

// $strawberry = new Strawberry("Strawberry", "red");
// $strawberry->message();
// $strawberry->intro();


class Apple extends Fruit{
    public $price;
    public function show($price){
        
        echo 'This is new Fruit'. $price;
    }
}

$apple = new Apple('Apple', 'Red','meetha');
// $apple-> intro();
$apple->show(100);
?>
 
</body>
</html>
