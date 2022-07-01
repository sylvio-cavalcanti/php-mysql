<html>
<body>
<h1> The Fruit App</h1>
</body>
</html>

<?php
	class fruit {
		public $name;
		public $color;

		function set_name($name) {
			$this -> name = $name;
		}
		function get_name() {
			return $this -> name; 
		}
	}
?>