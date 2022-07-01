<html>
<body>
</body>
</html>

<?php
  class Fruit {
    public $name;
    public $color;

    // Always use two underscores in front of the constructor function
    function __construct($name, $color){ 
      // The constructor function here will be used as a set method (setter)
      // To set the 'name' and 'color' of the fruit, by default, during the object creation
      $this->name = $name;
      $this->color = $color;
    }
    function get_name() {
      return $this->name;
    }
    function get_color() {
      return $this->color;
    }
  }
  // Creating an object to invoke the constructor
  // The attributes for the constructor needs to be passed in here:
  $strawberry = new Fruit ('Strawberry', 'red');

  // Displaying the name and color of the strawberry object
  echo $strawberry->get_name();
  echo "<br>";
  echo $strawberry->get_color();
?>