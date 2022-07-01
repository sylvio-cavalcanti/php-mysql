<html>
<body>
</body>
</html>

<?php
  class Fruit {
    public $name;
    public $color;

    function __construct($name, $color){ 
      $this->name = $name;
      $this->color = $color;
    }

    // Destruct function 
    function __destruct() {
        echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
  }

  // Object creation:
  $strawberry = new Fruit ('Strawberry', 'red');

?>