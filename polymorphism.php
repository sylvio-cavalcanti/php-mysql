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
    public $weight;
    /* Note: To OVERWRITE the ‘constructor’ and the ‘intro’ functions from the Fruit class, 
      we have to create the same functions, in the derived class also.  */
    public function __construct($name, $color, $weight) {
      /* This function has one extra attribute 'weight' in compare with the one in the Fruits class  */
      $this->name = $name;
      $this->color = $color;
      $this->weight = $weight;
    }
    public function intro () {
      echo "This fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight} grams.";
    }
  } 

  $cherry = new Cherry("Cherry", "red", 25);
  $cherry->intro();
  
?>