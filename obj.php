<html>
<body>
<h1> The Fruit App</h1>
</body>
</html>

<?php
	class Fruit {
		public $name;
		public $color;

		function set_name($name) {
			$this -> name = $name;
		}
		function get_name() {
			return $this -> name; 
		}
	}
  // Creating objects from the class Fruit:
  $apple = new Fruit();
  $banana = new Fruit();
  // Setting the values for each object with the function 'set_name'
  $apple->set_name('Apple');
  $banana->set_name('Banana');
  // Displaying the values of the property 'name' using the 'get_name' function
  echo $apple->get_name();
  echo "<br>";
  echo $banana->get_name();
?>