<html>
<body>
</body>
</html>

<?php
  class Fruit {
    // Parent class
    public $name;
    public $color;

    public function __construct($name, $color){ 
      $this->name = $name;
      $this->color = $color;
    }
    public function intro() {
      echo "A {$this->name} is a fruit and the color of the fruit is {$this->color}.";
    }
  }

  class Cherry extends Fruit {
    // Child class which inherits the Fruit class
    public function message() {
      echo "Is cherry a fruit or a berry?";
    }
  } 
  
  // Creating an object of the Cherry class
  // Note that we pass the parameters for the Fruit parent class here, used int the constructor
  $cherry = new Cherry ("Cherry", "red");
  $cherry->message();
  $cherry->intro();

?>